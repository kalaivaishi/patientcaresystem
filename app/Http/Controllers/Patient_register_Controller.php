<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_register_model;


class Patient_register_Controller extends Controller
{
   public function patient_register()
    {
        return view("wipc_patient_register");
    }

    public function save_patient_register(Request $request)
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
        
        
                
        $patient_register->save();

        return back();
    }
}
