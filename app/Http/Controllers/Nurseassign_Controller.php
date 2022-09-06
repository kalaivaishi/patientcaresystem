<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurseassign_model;
use App\Models\Beds_model;
use App\Models\Nursestation_model;
use App\Models\User;
use App\Models\Shift_model;
use App\Models\Days_model;
use App\Models\Patient_admission_modal;


class Nurseassign_Controller extends Controller
{
    public function nurse_assign()
    {
        $bed_master = Beds_model::get();
        $nurse_station = Nursestation_model::get();
        $nurse_name = User::get();
        $shift = Shift_model::get();
        $days = Days_model::get();
        $nurse_assign = Nurseassign_model::get();
        return view("wipc_nurse_assignment",compact("bed_master","nurse_station","nurse_name","shift","days",'nurse_assign'));
    }

    public function save_nurse_assign(Request $request)
    {
        $nurse_assign = new Nurseassign_model;
        $patient_admission = Patient_admission_modal::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no]
        ])->first();
  
        $nurse_assign->floor_no = $request->floor_no;
        $nurse_assign->ward_no = $request->ward_no;
        $nurse_assign->room_no = $request->room_no;
        $nurse_assign->bed_no = $request->bed_no;
        $nurse_assign->UHID = $patient_admission->UHID;
        $nurse_assign->admission_id = $patient_admission->admission_id;
        $nurse_assign->call_type_id = '';
        $nurse_assign->nurse_station_id = $request->nurse_station_id;
        $nurse_assign->nurse_id = $request->nurse_id;
        $nurse_assign->shift_name = $request->shift_name;
        $nurse_assign->days_id = $request->days_id;

        $nurse_assign->save();
         $beds = Beds_model::where([
            ['floor_no',$request->floor_no],
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no]
        ])->update(array('status' =>'assigned'));
        return back();
    }
}
