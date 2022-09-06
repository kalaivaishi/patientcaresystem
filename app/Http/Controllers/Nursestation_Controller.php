<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nursestation_model;
use App\Models\Nurse_ServiceMaster_model;

class Nursestation_Controller extends Controller
{
   public function nurse_station()
    {
        return view("wipc_nurse_station");
    }

    public function save_nurse_station(Request $request)
    {
        $nurse_station = new Nursestation_model;

        $nurse_station->head_nurse_id = $request->head_nurse_id;
                
        $nurse_station->save();

        return back();
    }

    public function nurse_service()
    {
        return view("wipc_nurse_service_master");
    }

    public function save_nurse_service(Request $request)
    {
        $nurse_service = new Nurse_ServiceMaster_model;

        $nurse_service->service_name = $request->service_name;
        $nurse_service->description = $request->description;
                
        $nurse_service->save();

        return back();
    }
}
