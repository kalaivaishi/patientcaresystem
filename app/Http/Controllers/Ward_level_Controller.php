<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward_level_model;


class Ward_level_Controller extends Controller
{
    public function ward_level()
    {
        return view("wipc_ward_level");
    }

    public function save_ward_level(Request $request)
    {
        $ward_level = new Ward_level_model;

        $ward_level->short_description = $request->short_desc;
        $ward_level->description = $request->description;
                
        $ward_level->save();

        return back();
    }
}
