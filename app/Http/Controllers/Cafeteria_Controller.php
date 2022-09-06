<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeMenu_model;
use App\Models\Call_list_model;
use App\Models\Cafeteria_service_model;

class Cafeteria_Controller extends Controller
{

    public function complete_cafe_call(Request $request)
    {
        $complete_cafe_call = Call_list_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['call_type_id',3]
        ])->update(array('status' =>'Completed','service_given' =>$request->nurse_id,'end_date_time' => date('Y-m-d H:i:s')));

       return redirect('/cafeteria_station');
    }

     public function cafeteria_list()
    {
        $cafeteria_list['data'] = Cafeteria_service_model::get();

       return response()->json($cafeteria_list);
    }

    public function complete_house_keeping_call(Request $request)
    {
        $complete_hk_call = Call_list_model::where([
            ['ward_no',$request->ward_no],
            ['room_no',$request->room_no],
            ['bed_no',$request->bed_no],
            ['UHID',$request->uhid],
            ['call_type_id',4]
        ])->update(array('status' =>'Completed','service_given' =>$request->nurse_id,'end_date_time' => date('Y-m-d H:i:s')));

       return redirect('/housekeeping_station');
    }

     public function cafe_menu()
    {
        return view("wipc_cafe_menu");
    }

    public function save_cafe_menu(Request $request)
    {
        $cafe_menu = new CafeMenu_model;

        $cafe_menu->date = $request->date;
        $cafe_menu->juice1 = $request->juice1;
        $cafe_menu->juice2 = $request->juice2;
        $cafe_menu->juice3 = $request->juice3;
        $cafe_menu->juice4 = $request->juice4;
        $cafe_menu->meal_type1 = $request->meal_type1;
        $cafe_menu->meal_type2 = $request->meal_type2;
        $cafe_menu->meal_type3 = $request->meal_type3;
        $cafe_menu->meal_type4 = $request->meal_type4;
        $cafe_menu->snack1 = $request->snack1;
        $cafe_menu->snack2 = $request->snack2;
        $cafe_menu->snack3 = $request->snack3;
        $cafe_menu->snack4 = $request->snack4;
        $cafe_menu->cake1 = $request->cake1;
        $cafe_menu->cake2 = $request->cake2;
        $cafe_menu->cake3 = $request->cake3;
        $cafe_menu->cake4 = $request->cake4;
        $cafe_menu->week_day = $request->week_day;


        $cafe_menu->save();

        return back();
    }


}
