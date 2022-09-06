<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_register_model;
use App\Models\Patient_admission_modal;
use App\Models\Call_list_model;
use App\Models\Nurseassign_model;
use App\Models\Report_admin_model;
//use Illuminate\Support\Carbon;
use Carbon\Carbon;
use App\Models\Cafeteria_service_model;
use App\Models\HouseKeeping_service_model;
use Illuminate\Support\Facades\Http;


class Patient_homepage_Controller extends Controller
{
    public function patient_homepage()
    {
        return view('patient_call.patient_home_page');
    }

    public function get_uhid(Request $request)
    {
        
        $patient_admission = Patient_admission_modal::where('UHID',$request->uhid)->orderby('created_at', 'desc')->first();

        $patient_register = Patient_register_model::where('UHID',$request->uhid)->first();

        $data['admission_id'] = $patient_admission->admission_id;
        $data['admission_date'] = $patient_admission->DOA;
        $data['patient_name'] = $patient_admission->first_name;
        $data['age_sex'] = $patient_register->age;
        $data['admission_purpose'] = $patient_admission->admission_purpose;
        $data['ward'] = $patient_admission->ward_no;
        $data['room'] = $patient_admission->room_no;
        $data['bed'] = $patient_admission->bed_no;
        $data['mob_no'] = $patient_admission->mobile_no1;

        $data['call_list'] = Call_list_model::where([
            ['UHID',$request->uhid],
            ['status','']
        ])->get();

         return response()->json($data);

        //return view('patient_call.patient_home_view',compact('patient_admission','patient_register'));
        //return view('patient_call.patient_home_view',['patient_admission'=>$patient_admission]);
    }

   
    public function emergency_call(Request $request)
    {
        $emergency_call = new Call_list_model;

        $patient_admission = Patient_admission_modal::where([
            ['UHID',$request->uhid],
        ])->orderby('created_at', 'desc')->first();

        $emergency_call->UHID = $request->uhid;
        $emergency_call->admission_id = $patient_admission->admission_id;
        $emergency_call->ward_no = $patient_admission->ward_no;
        $emergency_call->room_no = $patient_admission->room_no;
        $emergency_call->bed_no = $patient_admission->bed_no;
        $emergency_call->call_type_id = 1;
        $emergency_call->escalate_call_id = '';
        $emergency_call->status_color = "red";
        $emergency_call->status = "";
        $emergency_call->service_given = "";
        $emergency_call->cafe_service = "";
        $emergency_call->start_date_time = Carbon::now();
        $emergency_call->end_date_time = date('Y-m-d H:i:s');
        $emergency_call->call_end_date= date('Y-m-d');
        $emergency_call->call_start_date= date('Y-m-d');

        $emergency_call->save();

        $nurse_assign = Nurseassign_model::where([
            ['ward_no',$patient_admission->ward_no],
            ['room_no',$patient_admission->room_no],
            ['bed_no',$patient_admission->bed_no],
            ['UHID',$request->uhid]
        ])->update(array('call_type_id' =>'1'));

        $data['message'] = "Emergency Call send successfully";

         $data['call_list'] = Call_list_model::where([
            ['UHID',$request->uhid],
            ['status',''],
            ['start_date_time',date('Y-m-d H:i:s')]
        ])->get();

        return response()->json($data);

    }

    public function nurse_call(Request $request)
    {
        $nurse_call = new Call_list_model;

        $patient_admission = Patient_admission_modal::where('UHID',$request->uhid)->orderby('created_at', 'desc')->first();
        $nurse_call->UHID = $request->uhid;
        $nurse_call->admission_id = $patient_admission->admission_id;
        $nurse_call->ward_no = $patient_admission->ward_no;
        $nurse_call->room_no = $patient_admission->room_no;
        $nurse_call->bed_no = $patient_admission->bed_no;
        $nurse_call->call_type_id = 2;
        $emergency_call->escalate_call_id = '';
        $nurse_call->status_color = "orange";
        $nurse_call->status = "";
        $nurse_call->service_given = "";
        $nurse_call->start_date_time = date('Y-m-d H:i:s');
        $nurse_call->end_date_time = date('Y-m-d H:i:s');
        $nurse_call->call_end_date = date('Y-m-d');
        $nurse_call->call_start_date= date('Y-m-d');

        $nurse_call->save();

        $nurse_assign = Nurseassign_model::where([
            ['ward_no',$patient_admission->ward_no],
            ['room_no',$patient_admission->room_no],
            ['bed_no',$patient_admission->bed_no],
            ['UHID',$request->uhid]
        ])->update(array('call_type_id' =>'2'));

        $data['message'] = "Nurse Call send successfully";

         $data['call_list'] = Call_list_model::where([
            ['UHID',$request->uhid],
            ['status',''],
            ['start_date_time',date('Y-m-d H:i:s')]
        ])->get();

        return response()->json($data);

    }
    public function cafeteria_station()
    {
         $call_list = Call_list_model::join('wipc_cafeteria_service','wipc_cafeteria_service.cafeservice_id','=','wipc_call_list.cafe_service')->where('call_type_id',3)->get();
        //$call_list = Call_list_model::where('call_type_id',3)->get();
        $cafe_service = Cafeteria_service_model::get();
        return view('patient_call.cafeteria_call',compact('call_list','cafe_service'));
    }

    public function cafeteria_call(Request $request)
    {
        $cafeteria_call = new Call_list_model;

        $patient_admission = Patient_admission_modal::where('UHID',$request->uhid)->orderby('created_at', 'desc')->first();
        $cafeteria_call->UHID = $request->uhid;
        $cafeteria_call->admission_id = $patient_admission->admission_id;
        $cafeteria_call->ward_no = $patient_admission->ward_no;
        $cafeteria_call->room_no = $patient_admission->room_no;
        $cafeteria_call->bed_no = $patient_admission->bed_no;
        $cafeteria_call->call_type_id = 3;
        $cafeteria_call->escalate_call_id = '';
        $cafeteria_call->status_color = "lite green";
        $cafeteria_call->status = "";
        $cafeteria_call->service_given = '';
        $cafeteria_call->cafe_service = $request->selectedValue;
        $cafeteria_call->start_date_time = date('Y-m-d H:i:s');
        $cafeteria_call->end_date_time = date('Y-m-d H:i:s');
        $cafeteria_call->call_end_date = date('Y-m-d');
        $cafeteria_call->call_start_date= date('Y-m-d');

        $cafeteria_call->save();

        $data['message'] = "Cafeteria Call send successfully";

         $data['call_list'] = Call_list_model::where([
            ['UHID',$request->uhid],
            ['status',''],
            ['start_date_time',date('Y-m-d H:i:s')]
        ])->get();

        return response()->json($data);
    }

    public function housekeeping_station()
    {
        $call_list = Call_list_model::where('call_type_id',4)->get();
        $hk_service = HouseKeeping_service_model::get();
        return view('patient_call.house_keeping_call',compact('call_list','hk_service'));
    }

    public function house_keeping_call(Request $request)
    {
        $house_keeping_call = new Call_list_model;

        $patient_admission = Patient_admission_modal::where('UHID',$request->uhid)->orderby('created_at', 'desc')->first();
        $house_keeping_call->UHID = $request->uhid;
        $house_keeping_call->admission_id = $patient_admission->admission_id;
        $house_keeping_call->ward_no = $patient_admission->ward_no;
        $house_keeping_call->room_no = $patient_admission->room_no;
        $house_keeping_call->bed_no = $patient_admission->bed_no;
        $house_keeping_call->call_type_id = 4;
        $house_keeping_call->escalate_call_id = '';
        $house_keeping_call->status_color = "grey";
        $house_keeping_call->status = "";
        $house_keeping_call->service_given = "";
        $house_keeping_call->cafe_service = "";
        $house_keeping_call->start_date_time = date('Y-m-d H:i:s');
        $house_keeping_call->end_date_time = date('Y-m-d H:i:s');
        $house_keeping_call->call_end_date = date('Y-m-d');
        $house_keeping_call->call_start_date= date('Y-m-d');

        $house_keeping_call->save();


        $data['message'] = "House Keeping Call send successfully";

         $data['call_list'] = Call_list_model::where([
            ['UHID',$request->uhid],
            ['status',''],
            ['start_date_time',date('Y-m-d H:i:s')]
        ])->get();

        return response()->json($data);
    }

     public function report_admin($uhid)
    {
        $patient_admission = Patient_admission_modal::where('UHID',$uhid)->orderby('created_at', 'desc')->first();

        $patient_register = Patient_register_model::where('UHID',$uhid)->first();
         // $html_view = view("patient_call.report_admin");
         // return response()->json(['html'=>$html_view]);
        return view("patient_call.report_admin",compact('patient_admission','patient_register'));
    }

     public function save_report_admin($uhid,$admission_id,Request $request)
    {
        $save_report = new Report_admin_model;

        $save_report->complaint = $request->complaint;
        $save_report->feedback = $request->feedback;
        $save_report->suggestions = $request->suggestions;
        $save_report->date_time = date('Y-m-d H:i:s');
        $save_report->UHID = $uhid;
        $save_report->admission_id = $admission_id;

        $save_report->save();
        return back();
       
    }

    public function vitals()
    {
        return view('patient_call.patient_vitals');
    }

    public function medication()
    {
        return view('patient_call.patient_medication');
    }

    public function patient_history_view()
    {
        $collection = Http::get("https://rajmantu.pythonanywhere.com/api_patient_history");
        return view("patient_call.patient_history_view",['collection'=>$collection['data']]);
    }

    public function patient_medicine_view()
    {
        $collection = Http::get("https://rajmantu.pythonanywhere.com/api_medication_details");
        return view("patient_call.patient_medicine_view",['collection'=>$collection['data']]);
    }

}
