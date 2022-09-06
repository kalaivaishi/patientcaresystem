<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms_model;
use App\Models\Roomtype_model;
use App\Models\Floor_model;
use App\Models\Ward_detail_model;


class Rooms_Controller extends Controller
{
    public function rooms()
    {
        $floor = Floor_model::get();
        return view("wipc_rooms",compact("floor"));
    }

    public function ward_drop(Request $request)
    {
        
        $data['ward'] = Ward_detail_model::where("floor_number",$request->floor_number)->get(["ward_id","ward_number"]);
        return response()->json($data);
    }

    
    

    public function save_rooms(Request $request)
    {
        $rooms = new Rooms_model;

        $rooms->floor_no = $request->floor_no;
        $rooms->ward_no = $request->ward_no;
        $rooms->room_type = $request->room_type;
        $rooms->room_no = $request->room_no;
                
        $rooms->save();

        return back();
    }

    public function roomtype()
    {
        return view("wipc_room_type");
    }

    public function save_roomtype(Request $request)
    {
        $roomtype = new Roomtype_model;

        $roomtype->short_description = $request->short_desc;
        $roomtype->description = $request->description;
                
        $roomtype->save();

        return back();
    }
}
