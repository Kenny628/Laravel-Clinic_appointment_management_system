<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;
use App\Models\user;
use Auth;

class AppointmentController extends Controller
{
    
    function getAppointmentForSpecificDoctor(Request $request)
    {

        return view('/patient/appointment', [
            'doctors' => User::where('role', 'doctor')
                ->where('id', $request->input('chosen_doctor_id'))
                ->first(),
            'appointments' => Appointment::where('doctor_id', $request->input('chosen_doctor_id'))
                ->where('status', 'PENDING')
                ->orWhere('status', 'APPROVED')
                ->get(),
        ]);
    }

    function editAppointment(Request $request)
    {

        return view('/patient/appointment', [
            'doctors' => User::where('role', 'doctor')
                ->where('id', $request->input('chosen_doctor_id'))
                ->first(),
            'appointments' => Appointment::where('doctor_id', $request->input('chosen_doctor_id'))
                ->where('status', 'PENDING')
                ->orWhere('status', 'APPROVED')
                ->get(),
            'is_edit'=>$request->input('is_edit'),

            'edit_date'=>$request->input('edit_date'),
            'appointment_id'=>$request->input('appointment_id'),
        ]);
    }

    
    function editAppointment_admin(Request $request)
    {

        return view('/patient/appointment', [
            'doctors' => User::where('role', 'doctor')
                ->where('id', $request->input('chosen_doctor_id'))
                ->first(),
            'appointments' => Appointment::where('doctor_id', $request->input('chosen_doctor_id'))
                ->where('status', 'PENDING')
                ->orWhere('status', 'APPROVED')
                ->get(),
            'is_edit'=>$request->input('is_edit'),
            'is_admin'=>$request->input('is_admin'),
            'edit_date'=>$request->input('edit_date'),
            'appointment_id'=>$request->input('appointment_id'),
            'patient_id'=>$request->input('patient_id'),
        ]);
    }
    
    public function cancel_Appointment($appointment_id)
    {
        $delete_Data = appointment::find($appointment_id);
        $delete_Data->status = "CANCELLED";
        $delete_Data->save();
        return redirect('home');
    }

    public function submit_edit_appointment_form(Request $request)
    {
        $appointment=Appointment::find($request->appointment_id);
        $user = Auth::user();
        $appointment->doctor_id = $request->doctor_id;
        $appointment->date = $request->input('appointment_date');
        $appointment->time = $request->input('time');
        $appointment->user_id = $user['id']; //use session later
        $appointment->status = 'PENDING';
        $appointment->save();

        return redirect('/home');
    }

    public function admin_submit_edit_appointment_form(Request $request)
    {
        $appointment=Appointment::find($request->appointment_id);
        
        $appointment->doctor_id = $request->doctor_id;
        $appointment->date = $request->input('appointment_date');
        $appointment->time = $request->input('time');
        $appointment->user_id = $request->patient_id; //use session later
        $appointment->status = 'APPROVED';
        $appointment->save();

        return redirect('/home');
    }

    public function update_Appointment_Id(Request $req)
    {
        $update_appointment = Appointment::find($req->id);
        $update_appointment->status = "APPROVED";
        $update_appointment->save();
        
        return redirect('home'); // GO BACK TO HOME PAGE ACCORDING TO USER ROLE

    }

    public function make_appointment(Request $request)
    {
        $appointment=new Appointment;
        $user = Auth::user();
        $appointment->doctor_id = $request->doctor_id;
        $appointment->date = $request->input('appointment_date');
        $appointment->time = $request->input('time');
        $appointment->user_id = $user['id']; //use session later
        $appointment->status = 'PENDING';
        $appointment->save();

        return redirect('/home');
    }
}
