<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward_detail_model;
use App\Models\Floor_model;


class Ward_detail_Controller extends Controller
{
    public function ward_detail()
    {
        $floor = Floor_model::get();
        return view("wipc_ward_detail",compact("floor"));
    }

    public function save_ward_detail(Request $request)
    {
        $ward_detail = new Ward_detail_model;

        $ward_detail->ward_number = $request->ward_number;
        $ward_detail->floor_number = $request->floor_number;
        $ward_detail->nurse_station_id = $request->nurse_station_id;
        $ward_detail->ward_type = $request->ward_type;
        $ward_detail->ward_style = $request->ward_style;
        $ward_detail->ward_level = $request->ward_level;
        
        $ward_detail->save();

        return back();
    }
}
