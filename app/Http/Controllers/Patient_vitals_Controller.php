<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_vitals_model;


class Patient_vitals_Controller extends Controller
{
     public function patient_vitals()
    {
        return view("wipc_patient_vitals");
    }

    public function save_patient_vitals(Request $request)
    {
        $patient_vitals = new Patient_vitals_model;

        $patient_vitals->date = $request->date;
        $patient_vitals->time = $request->time;
        $patient_vitals->temperature = $request->temperature;
        $patient_vitals->pulse = $request->pulse;
        $patient_vitals->respirations = $request->respirations;
        $patient_vitals->blood_pressure = $request->blood_pressure;
        $patient_vitals->blood_sugar_F = $request->blood_sugar_F;
        $patient_vitals->blood_sugar_R = $request->blood_sugar_R;
        $patient_vitals->spo2 = $request->spo2;
        $patient_vitals->any_allergies = $request->any_allergies;
       
        $patient_vitals->save();

        return back();
    }
}
