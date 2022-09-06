<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurseassign_model;
use App\Models\User;
use App\Models\Consultant_register_model;
use App\Models\Call_list_model;
use App\Models\Nurse_ServiceMaster_model;
use App\Models\Nurse_observation_model;
use App\Models\Patient_admission_modal;


class Nurse_homepage_Controller extends Controller
{
    public function nurse_homepage()
    {
        return view('patient_call.nurse_home_view');
    }

    public function get_nurse_details(Request $request)
    {
        $ward_no = $request->ward_no;
        $nurse_id = Nurseassign_model::join('users','users.id','=','wipc_nurse_assignment.nurse_id')->where('ward_no',$request->ward_no)->distinct()->get();
        //$nurse_ids = $nurse_ids->unique();

        $bed_id = Nurseassign_model::where('ward_no',$request->ward_no)->get();
        $consult_name = Consultant_register_model::get();
        //header("Refresh:50");

        $emg_calls = Nurseassign_model::where([
            ['ward_no',$request->ward_no],
            ['call_type_id',1]
        ])->count('call_type_id');

        $nurse_calls = Nurseassign_model::where([
            ['ward_no',$request->ward_no],
            ['call_type_id',2]
        ])->count('call_type_id');

        $escalate_calls = Call_list_model::where([
            ['ward_no',$ward_no],
            ['escalate_call_id',5],
            ['call_start_date',date('Y-m-d')]
        ])->count('call_type_id');

        $complete_call = Call_list_model::where([
            ['ward_no',$request->ward_no],
            ['status','Completed'],
            ['call_start_date',date('Y-m-d')]
        ])->count('status');

        $service_given = Nurse_ServiceMaster_model::get();
      
        return view('patient_call.nurse_home_page',compact('nurse_id','ward_no','bed_id','emg_calls','nurse_calls','complete_call','service_given','consult_name','escalate_calls'));
    }

    public function get_single_nurse_detail(Request $request)
    {
        //$data = '';
        $bed = Nurseassign_model::where([
            ['ward_no',$request->ward_no],
            ['nurse_id',$request->nurse_id_value]
        ])->first();
        // foreach($bed_id as $bed)
        // {
        $data['bed'] = $bed->bed_no;
        // }

        return response()->json($data);
    }

    public function get_only_emg_call($ward_no)
    {
        $nurse_id = Nurseassign_model::join('users','users.id','=','wipc_nurse_assignment.nurse_id')->where('ward_no',$ward_no)->distinct()->get('users.name');

        $bed_id = Nurseassign_model::where([
            ['ward_no',$ward_no],
            ['call_type_id',1]
        ])->get();

        $emg_calls = Nurseassign_model::where([
            ['ward_no',$ward_no],
            ['call_type_id',1]
        ])->count('call_type_id');

        $nurse_calls = Nurseassign_model::where([
            ['ward_no',$ward_no],
            ['call_type_id',2]
        ])->count('call_type_id');

        $escalate_calls = Call_list_model::where([
            ['ward_no',$ward_no],
            ['escalate_call_id',5],
            ['call_start_date',date('Y-m-d')]
        ])->count('call_type_id');

        $complete_call = Call_list_model::where([
            ['ward_no',$ward_no],
            ['status','Completed'],
            ['call_start_date',date('Y-m-d')]
        ])->count('status');

        $service_given = Nurse_ServiceMaster_model::get();

        $consult_name = Consultant_register_model::get();

        return view('patient_call.emergency_call',compact('nurse_id','ward_no','bed_id','emg_calls','nurse_calls','complete_call','service_given','consult_name','escalate_calls'));
               
    }

    public function get_only_nurse_call($ward_no)
    {
        $nurse_id = Nurseassign_model::join('users','users.id','=','wipc_nurse_assignment.nurse_id')->where('ward_no',$ward_no)->distinct()->get('users.name');

        $bed_id = Nurseassign_model::where([
            ['ward_no',$ward_no],
            ['call_type_id',2]
        ])->get();

        $emg_calls = Nurseassign_model::where([
            ['ward_no',$ward_no],
            ['call_type_id',1]
        ])->count('call_type_id');

        $nurse_calls = Nurseassign_model::where([
            ['ward_no',$ward_no],
            ['call_type_id',2]
        ])->count('call_type_id');

         $escalate_calls = Call_list_model::where([
            ['ward_no',$ward_no],
            ['escalate_call_id',5],
            ['call_start_date',date('Y-m-d')]
        ])->count('call_type_id');
        
        $complete_call = Call_list_model::where([
            ['ward_no',$ward_no],
            ['status','Completed'],
            ['call_start_date',date('Y-m-d')]
        ])->count('status');

        $service_given = Nurse_ServiceMaster_model::get();

        $consult_name = Consultant_register_model::get();


        return view('patient_call.nurse_call',compact('nurse_id','ward_no','bed_id','emg_calls','nurse_calls','complete_call','service_given','consult_name','escalate_calls'));
               
    }

    public function complete_call(Request $request)
    {
        $complete_call = Call_list_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id],
            ['call_type_id',1]
        ])->orwhere([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id],
            ['escalate_call_id',5]
        ])->update(array('status' =>'Completed','service_given' =>$request->nurse_id,'end_date_time' => date('Y-m-d H:i:s'),'call_end_date' =>date('Y-m-d')));
        
        $nurse_observe =Nurse_observation_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id],
        ])->update(array('status' =>'Completed'));
        
        $nurse_assign = Nurseassign_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id],
        ])->update(array('call_type_id' =>''));

       return redirect('/nurse_homepage');
    }

    public function complete_escalate_call(Request $request)
    {
        $complete_call = Call_list_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id],
            ['escalate_call_id',5]
        ])->update(array('status' =>'Completed','service_given' =>$request->nurse_id,'end_date_time' => date('Y-m-d H:i:s'),'call_end_date' =>date('Y-m-d')));
        
        $nurse_observe = Nurse_observation_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id]
        ])->update(array('status' =>'Completed'));
        
        $nurse_assign = Nurseassign_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id]
        ])->update(array('call_type_id' =>''));

       return redirect('/nurse_homepage');
    }

    public function nurse_observation(Request $request)
    {
        $nurse_observation = new Nurse_observation_model;

        $nurse_observation->description = $request->description;
        $nurse_observation->background = $request->background;
        $nurse_observation->consultant_description = '';
        $nurse_observation->consultant_background = '';
        $nurse_observation->consultant_id = $request->consult_id;
        $nurse_observation->nurse_id = '';
        $nurse_observation->call_type_id = '5';
        $nurse_observation->UHID = $request->p_uhid;
        $nurse_observation->admission_id = $request->p_admiss_id;
        $nurse_observation->ward_no = $request->p_ward_no;
        $nurse_observation->room_no = $request->p_room_no;
        $nurse_observation->bed_no = $request->p_bed_no;
        $nurse_observation->escaltate_time = date('H:i:s');
        $nurse_observation->escaltate_date = date('Y-m-d');
        $nurse_observation->status = '';

        $nurse_observation->save();

        $call_list = Call_list_model::where([
            ['ward_no',$request->p_ward_no],
            ['room_no',$request->p_room_no],
            ['bed_no',$request->p_bed_no],
            ['UHID',$request->p_uhid],
            ['admission_id',$request->p_admiss_id]
        ])->update(array('escalate_call_id' =>'5'));

        $nurse_assign = Nurseassign_model::where([
            ['ward_no',$request->p_ward_no],
            ['room_no',$request->p_room_no],
            ['bed_no',$request->p_bed_no],
            ['UHID',$request->p_uhid],
            ['admission_id',$request->p_admiss_id]
        ])->update(array('call_type_id' =>'5'));


        return redirect('/nurse_homepage');
    }

    public function escalate_call(Request $request)
    {
        $consult_id = Patient_admission_modal::join('wipc_doctor_register','wipc_doctor_register.consultant_id','=','wipc_patient_admission.consultant_name')->where([
                ['UHID',$request->uhid],
                ['admission_id',$request->admiss_id],
                ['ward_no',$request->ward_no],
                ['room_no',$request->room_no],
                ['bed_no',$request->bed_no]
        ])->first();

        $consult_name['name'] = $consult_id->consultant_name;

        return response()->json($consult_name);
    }

    public function consult_observe(Request $request)
    {
        $consult_observe = Nurse_observation_model::where([
            ['UHID',$request->uhid],
            ['admission_id',$request->admiss_id],
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
        ])->first();

        $data['consult_desc'] = $consult_observe->consultant_description;
        $data['consult_backg'] = $consult_observe->consultant_background;

        return response()->json($data);
    }
}
