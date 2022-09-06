<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward_style_model;


class Ward_style_Controller extends Controller
{
    public function ward_style()
    {
        return view("wipc_ward_style");
    }

    public function save_ward_style(Request $request)
    {
        $ward_style = new Ward_style_model;

        $ward_style->short_description = $request->short_desc;
        $ward_style->description = $request->description;
                
        $ward_style->save();

        return back();
    }
}
