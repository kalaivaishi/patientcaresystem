<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department_model;

class Department_Controller extends Controller
{
   public function department()
    {
        return view("wipc_dept");
    }

    public function save_department(Request $request)
    {
        $dept = new Department_model;

        $dept->name = $request->name;
        $dept->feedback_admin_id = $request->feedback_admin_id;
        $dept->full_access_admin_id = $request->full_access_admin_id;
        $dept->app_id = $request->app_id;
        $dept->app_name = $request->app_name;
        
        $dept->save();

        return back();
    }
}
