<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward_type_model;


class Ward_type_Controller extends Controller
{
     public function ward_type()
    {
        return view("wipc_ward_type");
    }

    public function save_ward_type(Request $request)
    {
        $ward_type = new Ward_type_model;

        $ward_type->short_description = $request->short_desc;
        $ward_type->description = $request->description;
                
        $ward_type->save();

        return back();
    }
}
