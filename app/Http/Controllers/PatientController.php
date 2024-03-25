<?php

namespace App\Http\Controllers;

use App\Models\patient_record;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    public function loadViewPatients()
    {
        // Gate::authorize('isAdmin');
        if (Gate::allows('isDoctor')) {
            $sessionId = Session::get('user_id');
            $patients = patient_record::where('doctor_id', $sessionId)->get('patient_id');

            foreach ($patients as $patient) {
                $array[] = User::find($patient['patient_id']);
            }

            if(!empty($array)){
            $collection = collect($array);
            $uniqueCollection = $collection->unique('id');
            $uniqueArray = $uniqueCollection->all();
            return view('patient.managepatient', ['patients' => $uniqueArray]);
            }else{
                return view('patient.managepatient', ['patients' => []]);
            }
        } else {
            $data = User::whereRole('patient')->paginate(3);
            return view('patient.managepatient', ['patients' => $data]);
        }
    }


    public function loadPatientDetail($id)
    {
        $sessionId = Session::get('user_id');
        $appointment = Appointment::find($id);
        $doctor = User::find($sessionId);
        $patient = User::find($appointment['user_id']);
        return view('patient.addpatientrecord', ['patient' => $patient, 'doctor' => $doctor, 'appointment' => $appointment]);
    }

    public function loadPatientDetails($id)
    {
        $name = User::find($id);
        $data = patient_record::where('patient_id', $id)->get();
        return view('patient.viewpatient', ['patient' => $data, 'name' => $name]);
    }

    function addnewrecord(Request $req)
    {
        $req->validate([
            'symptoms' => 'required',
            'diagnosis' => 'required',
            'prescription' => 'required',
        ]);

        //UPDATE APPOINTMENT TO DONE
        $appoint = Appointment::find($req->appointment_id);
        $appoint->status = "DONE";
        $appoint->save();

        $data = new patient_record();
        $data->patient_id = $req->patient_id;
        $data->doctor_id = $req->doctor_id;
        $data->appointment_id = $req->appointment_id;
        $data->symptoms = $req->symptoms;
        $data->diagnosis = $req->diagnosis;
        $data->prescription = $req->prescription;
        $data->test_result = $req->test_result;
        $data->save();
        return redirect("home");
    }
    public function deletePatient($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/patient/all');
    }

    function updateRecords(Request $req)
    {
        if ($req != null) {
            $data = patient_record::find($req->id);
            $patient = User::find($req->patient_id);
            $data->symptoms = $req->symptoms;
            $data->diagnosis = $req->diagnosis;
            $data->prescription = $req->prescription;
            $data->test_result = $req->test_result;
            $data->save();

            return redirect("/patient/viewpatient/" . $patient['id']);
        } else
            return ("error no data");
    }

    public function updatePatientDetails($id)
    {
        $data = patient_record::find($id);
        $patient = User::where('id', $data['patient_id'])->first();
        return view('patient.editpatient', ['data' => $data, 'patient' => $patient]);
    }

    function viewDoctors()
    {
        return view('/patient/viewDoctors', ['doctors' => User::where('role', 'doctor')->get()]);
    }
}
