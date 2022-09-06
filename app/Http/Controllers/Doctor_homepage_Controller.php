<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_admission_modal;
use App\Models\Nurse_observation_model;
use App\Models\Call_list_model;

class Doctor_homepage_Controller extends Controller
{
    public function patient_view()
    {
        $patient_details = Patient_admission_modal::join('wipc_doctor_register','wipc_doctor_register.consultant_id','=','wipc_patient_admission.consultant_name')->get();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.patient_view",compact('patient_details','escalate_call_count','emergen_call_count'));
    }

    public function escalate_call_list()
    {
        $nurse_observe = Nurse_observation_model::get();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.escalate_call_list",compact('escalate_call_count','nurse_observe','emergen_call_count'));
    }

    public function emergency_call_list()
    {
        $patient_details = Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.emergency_patient_call",compact('emergen_call_count','patient_details','escalate_call_count'));
    }

    public function patient_history($admission_id)
    {
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
         $session_id = session()->put('admission_id',$admission_id);
        //$session_id = Session::getId($admission_id);

        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.patient_history",compact('escalate_call_count','patient_details','emergen_call_count'));
    }

    public function doc_patient_vitals($admission_id)
    {
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.vitals",compact('escalate_call_count','patient_details','emergen_call_count'));
    }

    public function lab_reports($admission_id)
    {
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.lab_reports",compact('escalate_call_count','patient_details','emergen_call_count'));
    }

    public function radiology_reports($admission_id)
    {
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.radiology_reports",compact('escalate_call_count','patient_details','emergen_call_count'));
    }

    public function doc_medication($admission_id)
    {
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.medication",compact('escalate_call_count','patient_details','emergen_call_count'));
    }

    public function doc_nurse_call($observation_id)
    {
        $admission_detail = Nurse_observation_model::where('observation_id',$observation_id )->first();
        $admission_id = $admission_detail->admission_id;
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
        $nurse_observe = Nurse_observation_model::where('observation_id',$observation_id)->first();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.nurse_call",compact('nurse_observe','patient_details','escalate_call_count','emergen_call_count'));
    }

    public function nurse_observe(Request $request)
    {
        $nurse_observe = Nurse_observation_model::where([
            ['UHID',$request->uhid],
            ['status',''],
            ['observation_id',$request->observe_id]
        ])->first();

        $data['observation_id'] = $request->observe_id;
        $data['description'] = $nurse_observe->description;
        $data['background'] = $nurse_observe->background;

        return response()->json($data);

    }

    public function consultant_observe(Request $request)
    {
        $consult_observe = Nurse_observation_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['observation_id',$request->observate_id],
        ])->update(array('consultant_description' =>$request->description,'consultant_background' =>$request->background));

        return redirect('escalate_call_list');
    }

    public function doc_patient_call($admission_id)
    {
        $patient_details = Patient_admission_modal::where('admission_id',$admission_id)->first();
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.patient_call",compact('escalate_call_count','patient_details','emergen_call_count'));
    }

    public function alerts()
    {
        $escalate_call_count = count(Nurse_observation_model::where('consultant_description','')->get());
        $emergen_call_count = count(Call_list_model::where([
            ['call_type_id',1],
            ['status','']
        ])->get());
        return view("doctor_app.alerts",compact('escalate_call_count','emergen_call_count'));
    }

   
}
