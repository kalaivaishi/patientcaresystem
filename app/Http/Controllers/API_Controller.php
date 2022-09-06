<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Consultant_register_model;
use App\Models\Patient_register_model;
use App\Models\Patient_admission_modal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Nurseassign_model;
use App\Models\Beds_model;
use App\Models\Report_admin_model;
use App\Models\Medicationdetail_model;
use App\Models\Servicemaster_model;
use App\Models\History_medical_model;
use App\Models\History_surgical_model;
use App\Models\History_family_model;
use App\Models\History_vaccination_model;
use App\Models\History_drug_allergy_model;



class API_Controller extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if($validator->fails()){
            return response()->json(['message'=>'validator error'],401);
        }
   
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $response['token'] =  $user->createToken('MyApp');
        $response['name'] =  $user->name;
   
        return response()->json($response,200);
    
    }

    public function doctor_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'consultant_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if($validator->fails()){
            return response()->json(['message'=>'validator error'],401);
        }
   
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = Consultant_register_model::create($input);
        $response['token'] =  $user->createToken('MyApp');
        $response['consultant_name'] =  $user->consultant_name;
   
        return response()->json($response,200);
    
    }


    public function login(Request $request)
    {
         if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
         { 
            $user = Auth::user(); 
            //$response['token'] =  $user->createToken('MyApp'); 
            $response['name'] =  $user->name;
            $user_id =  $user->id;
            $nurse_assign = Nurseassign_model::where("nurse_id","=",$user_id)->get();
            foreach ($nurse_assign as $assign) {
                $nurse_station_id =  $assign->nurse_station_id;
                $bed_id = $assign->bed_id;
                $beds = Beds_model::where("bed_id","=",$bed_id)->get();
            foreach ($beds as $bed) {
            
            $number_of_wards =  $bed->ward_no;
            $number_of_rooms =  $bed->room_no;
            $number_of_beds =  $bed->bed_no;
        }
            }
            
            $response['nurse_station_id'] =  $nurse_station_id;
            $response['number_of_wards'] =  $number_of_wards;
            $response['number_of_rooms'] =  $number_of_rooms;
            $response['number_of_beds'] =  $number_of_beds;
            

            
            return response()->json($response,200);
            //return response()->json(['message'=>'Login successfully'],200);
        }

        else{ 
            return response()->json(['message'=>'invalid credentials error'],401);
        } 
    }
        
   
    public function detail()
    {
        $user = Auth::user(); 

        $response['user'] = $user;
        return response()->json([$response, 'User login successfully.']);

    }

     public function patient_register(Request $request)
    {
        $patient_register = new Patient_register_model;

        $patient_register->UHID = $request->UHID;
        $patient_register->first_name = $request->first_name;
        $patient_register->middle_name = $request->middle_name;
        $patient_register->last_name = $request->last_name;
        $patient_register->age = $request->age;
        $patient_register->dob = $request->dob;
        $patient_register->gender = $request->gender;
        $patient_register->DOR = $request->DOR;
        $patient_register->mobile_no = $request->mobile_no;
                
        $result = $patient_register->save();

        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function patient_register_list()
    {

        return Patient_register_model::all();
    }

     public function patient_admission(Request $request)
    {
        $patient_admission = new Patient_admission_modal;

        $patient_admission->UHID = $request->UHID;
        $patient_admission->admission_id = $request->admission_id;
        $patient_admission->ward_no = $request->ward_no;
        $patient_admission->room_no = $request->room_no;
        $patient_admission->bed_no = $request->bed_no;
        $patient_admission->DOA = $request->DOA;
        $patient_admission->consultant_name = $request->consultant_name;
        $patient_admission->admission_purpose = $request->admission_purpose;
        $patient_admission->first_name = $request->first_name;
        $patient_admission->middle_name = $request->middle_name;
        $patient_admission->last_name = $request->last_name;
        $patient_admission->gender = $request->gender;
        $patient_admission->mobile_no1 = $request->mobile_no1;
        $patient_admission->mobile_no2 = $request->mobile_no2;
                
        $result = $patient_admission->save();

        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

    public function patient_admission_list()
    {

        return Patient_admission_modal::all();
    }

    public function patient_details($uhid)
    {
        $patient_details['patient_admission'] = Patient_admission_modal::select('admission_id','ward_no','bed_no','DOA','admission_purpose','first_name','mobile_no1')->where('UHID',$uhid)->first();

        $patient_details['patient_register'] = Patient_register_model::select('age','dob','gender')->where('UHID',$uhid)->first();

        return $patient_details;
    }

    public function nurse_home($ward_no)
    {
        //$nurse_id = Nurseassign_model::select('nurse_id')->where('ward_no',$ward_no)->get();

        $nurse_id = Nurseassign_model::join('users','users.id','=','wipc_nurse_assignment.nurse_id')->where('ward_no',$ward_no)->get('users.name');

        return $nurse_id;
    }

    // public function nurse_name($nurse_id)
    // {
    //     $nurse_name = User::select('name')->where('id',$nurse_id)->get();

    //     return $nurse_name;
    // }
    public function bed_no($ward_no,$nurse_id)
    {
        $bed_no = Nurseassign_model::select('bed_no')->where('ward_no',$ward_no)->where('nurse_id',$nurse_id)->get();

        return $bed_no;
    }

    public function report_admin(Request $request)
    {
        $report = new Report_admin_model;

        $report->UHID = $request->UHID;
        $report->admission_id = $request->admission_id;
        $report->complaint = $request->complaint;
        $report->feedback = $request->feedback;
        $report->suggestions = $request->suggestions;
        $report->date_time = $request->date_time;
        $result = $report->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function report_admin_list($uhid)
    {
        $patient_details['patient_admission'] = Patient_admission_modal::select('admission_id','ward_no','bed_no','DOA','admission_purpose','first_name','mobile_no1')->where('UHID',$uhid)->first();

        $patient_details['patient_register'] = Patient_register_model::select('age','dob','gender')->where('UHID',$uhid)->first();
        $report_admin = Report_admin_model::all();

        return [$patient_details, $report_admin];
    }

    public function medicine_details(Request $request)
    {
        $medicine_details = new Medicationdetail_model;

        $medicine_details->UHID = $request->UHID;
        $medicine_details->admission_id = $request->admission_id;
        $medicine_details->medicine_name = $request->medicine_name;
        $medicine_details->consultant_name = $request->consultant_name;
        $medicine_details->prescription_date = $request->prescription_date;
        $medicine_details->dossage = $request->dossage;
        $medicine_details->duration = $request->duration;
        $medicine_details->DOA = $request->DOA;
        $result = $medicine_details->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function medicine_details_list($uhid)
    {
        $patient_details['patient_admission'] = Patient_admission_modal::select('admission_id','ward_no','bed_no','DOA','admission_purpose','first_name','mobile_no1')->where('UHID',$uhid)->first();

        $patient_details['patient_register'] = Patient_register_model::select('age','dob','gender')->where('UHID',$uhid)->first();

        $medicine_details = Medicationdetail_model::all();

        return [$patient_details, $medicine_details];

    }

    public function service_master(Request $request)
    {
        $service_master = new Servicemaster_model;

        $service_master->UHID = $request->UHID;
        $service_master->admission_id = $request->admission_id;
        $service_master->ward_no = $request->ward_no;
        $service_master->bed_no = $request->bed_no;
        $service_master->request_time = $request->request_time;
        $service_master->response_time = $request->response_time;
        $service_master->service_given = $request->service_given;
        $service_master->call_type = $request->call_type;
        $service_master->user_id = $request->user_id;
        $service_master->status = $request->status;
        $result = $service_master->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function service_master_list()
    {
        return Servicemaster_model::all();
    }

     public function his_medical(Request $request)
    {
        $his_medical = new History_medical_model;

        $his_medical->UHID = $request->UHID;
        $his_medical->description = $request->description;
        $his_medical->date = $request->date;
        $his_medical->user_id = $request->user_id;
        
        $result = $his_medical->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function his_medical_list()
    {
        return History_medical_model::all();
    }

    public function his_surgical(Request $request)
    {
        $his_surgical = new History_surgical_model;

        $his_surgical->UHID = $request->UHID;
        $his_surgical->description = $request->description;
        $his_surgical->date = $request->date;
        $his_surgical->user_id = $request->user_id;
        
        $result = $his_surgical->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function his_surgical_list()
    {
        return History_surgical_model::all();
    }

    public function his_family(Request $request)
    {
        $his_family = new History_family_model;

        $his_family->UHID = $request->UHID;
        $his_family->description = $request->description;
        $his_family->date = $request->date;
        $his_family->user_id = $request->user_id;
        
        $result = $his_family->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function his_family_list()
    {
        return History_family_model::all();
    }

    public function his_vaccine(Request $request)
    {
        $his_vaccine = new History_vaccination_model;

        $his_vaccine->UHID = $request->UHID;
        $his_vaccine->vaccine_name = $request->vaccine_name;
        $his_vaccine->vaccine_date = $request->vaccine_date;
        
        $result = $his_vaccine->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function his_vaccine_list()
    {
        return History_vaccination_model::all();
    }

    public function his_drugallergy(Request $request)
    {
        $his_drugallergy = new History_drug_allergy_model;

        $his_drugallergy->UHID = $request->UHID;
        $his_drugallergy->drugallergy_name = $request->drugallergy_name;
        $his_drugallergy->description = $request->description;
        $his_drugallergy->date = $request->date;
        $his_drugallergy->user_id = $request->user_id;
        
        $result = $his_drugallergy->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
    }

     public function his_drugallergy_list()
    {
        return History_drug_allergy_model::all();
    }
}
