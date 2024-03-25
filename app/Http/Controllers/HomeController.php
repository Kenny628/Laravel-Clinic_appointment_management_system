<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user_id = Auth::user()->id; // logged in user_id
        $user_password = Auth::user()->password; 

        //=====SET USER ID TO SESSION=====
        $request->session()->put('user_id', $user_id);

        //=====SET USER NAME TO SESSION=====
        $request->session()->put('user_name', Auth::user()->name);

        if(Gate::allows("isPatient")){

            //=====GET APPOINTMENT OF THE LOGIN USER, THAT HAVE APPOINTMENT THAT ARE APPROVED=====
            $upcoming_appointment = User::find($user_id)->getAppointments()->where('status', 'APPROVED')->get();

            //=====GET APPOINTMENT OF THE LOGIN USER, THAT HAVE APPOINTMENT THAT ARE PENDING=====
            $pending_appointment = User::find($user_id)->getAppointments()->where('status', 'PENDING')->get();

            //=====GET APPOINTMENT OF THE LOGIN USER, THAT HAVE APPOINTMENT THAT ARE COMPLETED=====
            $completed_appointment = User::find($user_id)->getAppointments()->where('status', 'DONE')->get();

            return view('home', ['upcoming' => $upcoming_appointment, 'pending' => $pending_appointment, 'completed' => $completed_appointment]);
            
        } else if(Gate::allows("isDoctor")){

            //=====GET ALL DOCTOR=====
        $completed_appointment =Appointment::where('doctor_id', $user_id ) ->where('status', 'APPROVED')->get();
            return view('home',['completed_appointment'=> $completed_appointment]);

        } else {
            
            //=====GET ALL THE APPROVED APPOINTMENT FROM APPOINTMENT TABLE
            $completed_Appointment_All = Appointment::where('status', 'DONE')->get();

            //=====GET ALL PENDING APPOINTMENT FROM APPOINTMENT TABLE=====
            $pending_Appointment_All = Appointment::where('status', 'PENDING')->get();

            //=====GET ALL THE ONGOING APPOINTMENT FROM APPOINTMENT TABLE=====
            $approved_Appointment_All = Appointment::where('status', 'APPROVED')->get();
            
            return view('home', ['all_pending_appointments' => $pending_Appointment_All, 'all_completed_appointment' => $completed_Appointment_All, 'approved_Appointment_All' => $approved_Appointment_All]);
        }
    }
}
