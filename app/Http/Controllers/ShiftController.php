<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift_model;


class ShiftController extends Controller
{
    public function shift_master()
    {
        return view("wipc_shift_master");
    }

    public function save_shift_master(Request $request)
    {
        $shift_master = new Shift_model;

        $shift_master->shift_name = $request->shift_name;
        $shift_master->shift_start_time = $request->shift_start_time;
        $shift_master->shift_end_time = $request->shift_end_time;
        $shift_master->description = $request->description;
        $shift_master->status = $request->status;
                
        $shift_master->save();

        return back();
    }
}
