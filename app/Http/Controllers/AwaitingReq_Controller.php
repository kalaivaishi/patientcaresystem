<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AwaitingReq_model;


class AwaitingReq_Controller extends Controller
{
    public function awaiting_request()
    {
        return view("wipc_waiting_request");
    }

    public function save_awaiting_request(Request $request)
    {
        
        $awaiting_request = new AwaitingReq_model;

        $awaiting_request->request_awaiting = $request->request_awaiting;
       
        $awaiting_request->save();

        return back();
    }


}
