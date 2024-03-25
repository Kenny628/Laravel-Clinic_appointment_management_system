<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class ProfileController extends Controller
{
    public function loadViewUser()
    {
        $user = Auth::user();
        return view('profile',['user'=>$user]);
    }

    public function showProfile($id)
    {
        $data = User::find($id);
        return view("/updateProfile",['data'=>$data]);
    }

    public function showProfilePicture($id)
    {
        $data = User::find($id);
        return view("/updateProfilePicture",['data'=>$data]);
    }

    public function updateProfile(Request $req)
    {

        if(Gate::allows('isPatient')){

        //compare hash old password with user input old password
        $hashedPassword = $req->oldPasswordHash;
        $plainTextPassword = $req->oldPassword;

        if(Hash::check($plainTextPassword, $hashedPassword))
        {
            $password = $req->newPassword;
            $hashedPassword = Hash::make($password);

            $req -> validate([
                'name' => 'required',
                'ic' => 'required | unique:users| regex: /^\d{6}-\d{2}-\d{4}$/',
                'phone' => 'regex: /^\d{3}-\d{7}$/ | required | unique:users',
                'oldPassword' => 'required',
                'newPassword' => 'required',
                'confirmPassword' => 'required | same:newPassword'
            ]);

            $update_Patient = User::find($req->id);
            $update_Patient ->name = $req->name;
            $update_Patient ->ic = $req->ic;
            $update_Patient ->phone = $req->phone;
            $update_Patient ->password = $hashedPassword;
            $update_Patient ->save();
            
            return redirect('/profile');

        }else{
            $req -> validate([
                'name' => 'required',
                'ic' => 'required | unique:users| regex: /^\d{6}-\d{2}-\d{4}$/',
                'phone' => 'regex: /^\d{3}-\d{7}$/ | required | unique:users',
                'oldPassword' => 'required',
                'newPassword' => 'required',
                'confirmPassword' => 'required | same:newPassword'
            ]);

            $req->session()->flash('PassFailedUpdate','Password update failed, old password is incorrect');
            return redirect('/updateProfile/'.$req -> id);
        }
    } else{
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'ic' => 'required | unique:users| regex: /^\d{6}-\d{2}-\d{4}$/',
            'phone' => 'regex: /^\d{3}-\d{7}$/ | required | unique:users',
            'password' => 'required | string | min:8 | confirmed',
            'expertise' => 'required | max:255',
            'password_confirmation' => 'required',
        ]);

        $update_Doctor = User::find($req->id);
        $update_Doctor->name = $req->name;
        $update_Doctor->email = $req->email;
        $update_Doctor->ic = $req->ic;
        $update_Doctor->phone = $req->phone;
        $update_Doctor->expertise = $req->expertise;
        $update_Doctor->password = bcrypt($req->password);
        $update_Doctor->save();

        return redirect('/profile');
    }

    }

    public function updateProfilePicture(Request $req)
    {
        //save img to public/userImages
        $req->validate([
            'profilePic' => 'required',
        ]);

        $x = 'UserImages/'.\Illuminate\Support\Str::random().'.'.$req->profilePic->getClientOriginalExtension();

        while(File::exists($x)){
            $x = 'UserImages/'.\Illuminate\Support\Str::random().'.'.$req->profilePic->getClientOriginalExtension();
        }


        if(!File::exists(public_path('UserImages'))){
            File::makeDirectory(public_path('UserImages'), 0755, true);
            File::move($req->profilePic, $x);
        }
        else{
            File::move($req->profilePic, $x);
        }

        $data = $req->input();

        $data = User::find($req ->  id);
        $data -> profilePic = $x;
        $data -> save();

        return redirect('/profile');
    }
}
