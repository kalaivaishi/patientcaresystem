<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calltype_model;

class Calltype_Controller extends Controller
{
    public function call_type()
    {
        return view("wipc_call_type");
    }

    public function save_call_type(Request $request)
    {
        $call_type = new Calltype_model;

        $call_type->department_id = $request->dept_id;
        $call_type->short_description = $request->short_desc;
        $call_type->description = $request->description;
        $call_type->max_time = $request->max_time;
        $call_type->reporting_user = $request->reporting_user;
        $call_type->date_created = $request->date_created;
        $call_type->created_by = $request->created_by;
        $call_type->user_role_assigned = $request->userrole_assigned;

        $call_type->save();

        return back();
    }

    public function example()
    {
        return view("example");
    }

    public function save_example(Request $request)
    {
        $interest_rate = $request->interest_rate;
        $principal_balance = $request->principle_balance;
        $period = $request->period;
        $due = ($interest_rate * $principal_balance * pow((1 + $interest_rate),
                                        $period)) / (pow((1 + $interest_rate),
                                        $period) - 1);

             return view("example",compact('due'));                           
    }

}
