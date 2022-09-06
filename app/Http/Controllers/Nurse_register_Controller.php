<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurse_register_model;


class Nurse_register_Controller extends Controller
{
    public function nurse_register()
    {
        return view("wipc_nurse_register");
    }

    public function save_nurse_register(Request $request)
    {
        $nurse_register = new Nurse_register_model;

        $nurse_register->name = $request->name;
        $nurse_register->specialization = $request->specialization;
        $nurse_register->assigned_shift = $request->assigned_shift;
        $nurse_register->login_status = $request->login_status;
                
        $nurse_register->save();

        return back();
    }
}
