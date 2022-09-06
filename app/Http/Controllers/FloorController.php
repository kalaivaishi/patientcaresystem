<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor_model;


class FloorController extends Controller
{
    public function floor()
    {
        return view("wipc_floor");
    }

    public function save_floor(Request $request)
    {
        $floor = new Floor_model;

        $floor->floor_no = $request->floor_no;
                
        $floor->save();

        return back();
    }

}
