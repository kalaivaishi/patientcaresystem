<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beds_model;
use App\Models\Bedtype_model;
use App\Models\Floor_model;
use App\Models\Ward_detail_model;
use App\Models\Rooms_model;

class Beds_Controller extends Controller
{
    public function beds()
    {
        $floor = Floor_model::get();
        return view("wipc_beds",compact("floor"));
    }
    
    public function ward_drops(Request $request)
    {
        
        $data['ward'] = Ward_detail_model::where("floor_number",$request->floor_number)->get(["ward_id","ward_number"]);
        return response()->json($data);
    }
    
    public function room_drops(Request $request)
    {
        $data['rooms'] = Rooms_model::where([
            ["floor_no",$request->floor_number],
            ["ward_no",$request->ward_number]
    ])->get(["room_id","room_no"]);
        
        
        return response()->json($data);
    }

    public function save_beds(Request $request)
    {
        $beds = new Beds_model;

        $floor = $beds->floor_no = $request->floor_no;
        $ward = $beds->ward_no = $request->ward_no;
        $room = $beds->room_no = $request->room_no;
        $bed = $beds->bed_no = $request->bed_no;

        $beds->bed_type = $request->bed_type;
        $concate = $floor.','.$ward.','.$room.','.$bed; 
        $beds->concatenate_string = $concate;
        $beds->status = 'unassigned';
        
        $beds->save();

        return back();
    }

     public function bedtype()
    {
        return view("wipc_bed_type");
    }

    public function save_bedtype(Request $request)
    {
        $bedtype = new Bedtype_model;

        $bedtype->short_description = $request->short_desc;
        $bedtype->description = $request->description;
                
        $bedtype->save();

        return back();
    }
}
