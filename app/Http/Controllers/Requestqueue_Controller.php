<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requestqueue_model;


class Requestqueue_Controller extends Controller
{
    public function request_queue()
    {
        return view("wipc_requestqueue");
    }

    public function save_request_queue(Request $request)
    {
        $request_queue = new Requestqueue_model;

        $request_queue->request_patient_id = $request->request_patient_id;
        $request_queue->request_nurse_id = $request->request_nurse_id;
        $request_queue->request_doctor_id = $request->request_doctor_id;
        $request_queue->request_pharmacy_id = $request->request_pharmacy_id;
        $request_queue->request_attendant_id = $request->request_attendant_id;
        $request_queue->request_date = $request->request_date;
        $request_queue->request_time = $request->request_time;
        $request_queue->acknowledged_time = $request->acknowledged_time;
        $request_queue->completed_time = $request->completed_time;
        $request_queue->re_routed_time = $request->re_routed_time;
        $request_queue->call_id = $request->call_id;
        $request_queue->request_assigned_to = $request->request_assigned_to;
        $request_queue->status = $request->status;

        $request_queue->save();

        return back();
    }
}
