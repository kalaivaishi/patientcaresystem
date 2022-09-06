<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Call_list_model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Nurseassign_model;
use App\Models\Patient_admission_modal;
use App\Models\Patient_health_monitor_model;


class Dashboard_Controller extends Controller
{
    public function patient_health_monitor()
    {
        $patient_details = Patient_admission_modal::join('wipc_patient_health_monitor','wipc_patient_health_monitor.admission_id','=','wipc_patient_admission.admission_id')->orderBy('wipc_patient_health_monitor.health__monitor_id','DESC')->get();
        $patient_id = Patient_admission_modal::get();
        $heart_rate = Patient_health_monitor_model::get('heart_rate');
        return view("patient_health_monitor_dashboard",compact('patient_details','patient_id','heart_rate'));
    }

    public function health_details(Request $request)
    {
        $data = Patient_health_monitor_model::where('UHID',$request->selectedText)->orderBy('health__monitor_id','DESC')->first();
        return response()->json($data);
    }

    public function signup()
    {
        return view('signup');
    }

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
   return 'successfully register';
        //return response()->json($response,200);
    
    }

    public function signin()
    {
        return view('signin');
    }

    public function login(Request $request)
    {
         if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
         {  
            return redirect('nurse_homepage');
            //return response()->json(['message'=>'Login successfully'],200);
         }

        else{ 
            return 'invalid credentials';
        } 
    }
        

    public function patient_view()
    {
        return view("doctor_app.patient_view");
    }

    public function patient_call()
    {
        return view("patient_call.patient_home_page");
    }

    public function dashboard()
    {
        $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
        $countYesterday = Call_list_model::whereDate('call_end_date', $yesterday )->get();

        $call_list = Call_list_model::where('status','Completed')->whereDate('call_end_date', $yesterday )->get();
        $call_list_count = count($call_list);
        
        $emg_call_count = count(Call_list_model::where('call_type_id',1)->where('status','Completed')->whereDate('call_end_date', $yesterday )->get());
        $emg_percent = ($emg_call_count/100)*$call_list_count;

        $nurse_call_count = count(Call_list_model::where('call_type_id',2)->where('status','Completed')->whereDate('call_end_date', $yesterday )->get());
        $nurse_call_percent = ($nurse_call_count/100)*$call_list_count;
        
        $cafe_call_count = count(Call_list_model::where('call_type_id',3)->where('status','Completed')->whereDate('call_end_date', $yesterday )->get());
        $cafe_call_percent = ($cafe_call_count/100)*$call_list_count;
        
        $hk_call_count = count(Call_list_model::where('call_type_id',4)->where('status','Completed')->whereDate('call_end_date', $yesterday )->get());
        $hk_call_percent = ($hk_call_count/100)*$call_list_count;

        return view("dashboard",compact('call_list','nurse_call_count','emg_call_count','cafe_call_count','hk_call_count','emg_percent','nurse_call_percent','cafe_call_percent','hk_call_percent','yesterday'));
    }

    public function get_graphical_data($start_date,$end_date)
    {
        $start_date = $start_date;
        $end_date = $end_date;
        
        $call_list = Call_list_model::where('status','Completed')->whereBetween('call_end_date', [$start_date, $end_date])->get();
        $call_list_count = count($call_list);
        
        $emg_call_count = count(Call_list_model::where('call_type_id',1)->where('status','Completed')->whereBetween('call_end_date', [$start_date, $end_date])->get());
        $emg_percent = ($emg_call_count/100)*$call_list_count;

        $nurse_call_count = count(Call_list_model::where('call_type_id',2)->where('status','Completed')->whereBetween('call_end_date', [$start_date, $end_date])->get());
        $nurse_call_percent = ($nurse_call_count/100)*$call_list_count;
        
        $cafe_call_count = count(Call_list_model::where('call_type_id',3)->where('status','Completed')->whereBetween('call_end_date', [$start_date, $end_date])->get());
        $cafe_call_percent = ($cafe_call_count/100)*$call_list_count;
        
        $hk_call_count = count(Call_list_model::where('call_type_id',4)->where('status','Completed')->whereBetween('call_end_date', [$start_date, $end_date])->get());
        $hk_call_percent = ($hk_call_count/100)*$call_list_count;
       
          return view("dashboard_graph",compact('call_list','nurse_call_count','emg_call_count','cafe_call_count','hk_call_count','emg_percent','nurse_call_percent','cafe_call_percent','hk_call_percent'));
       
    }

    public function get_tabular_data($start_date,$end_date)
    {
        $start_date = $start_date;
        $end_date = $end_date;
        
        $call_list = Call_list_model::where('status','Completed')->whereBetween('call_end_date', [$start_date, $end_date])->get();
       
          return view("dashboard_tabular",compact('call_list'));
    }


     public function dummy()
    {
        $collection = Http::get("https://rajmantu.pythonanywhere.com/api_patient_history");
        return view("patient_call.patient_history_view",['collection'=>$collection['data']]);
    }
}
