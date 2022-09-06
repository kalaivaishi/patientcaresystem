<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_login_model;


class User_login_Controller extends Controller
{
    public function user_login()
    {
        return view("wipc_user_login");
    }

    public function save_user_login(Request $request)
    {
        $user_login = new User_login_model;

        $user_login->user_name = $request->user_name;
        $user_login->password = $request->password;
        $user_login->department_id = $request->department_id;
        $user_login->user_type = $request->user_type;
        $user_login->name = $request->name;
        $user_login->login_time = $request->login_time;
        $user_login->date = $request->date;
        $user_login->logout_time = $request->logout_time;
        $user_login->checkin_status = $request->checkin_status;
        
        $user_login->save();

        return back();
    }
}
