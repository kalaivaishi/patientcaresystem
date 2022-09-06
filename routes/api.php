<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API_Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//user login
Route::post("register",[API_Controller::class,"register"]);
Route::post("login",[API_Controller::class,"login"]);
Route::get("detail",[API_Controller::class,"detail"])->middleware('auth:api');

//user login
Route::post("doctor_register",[API_Controller::class,"doctor_register"]);

//patient register
Route::post("patient_register",[API_Controller::class,"patient_register"]);
Route::get("patient_register_list",[API_Controller::class,"patient_register_list"]);

//patient admission
Route::post("patient_admission",[API_Controller::class,"patient_admission"]);
Route::get("patient_admission_list",[API_Controller::class,"patient_admission_list"]);

//patient details
Route::get("patient_details/{uhid}",[API_Controller::class,"patient_details"]);

//nurse home page
Route::get("nurse_home/{ward_no}",[API_Controller::class,"nurse_home"]);
Route::get("nurse_name/{nurse_id}",[API_Controller::class,"nurse_name"]);
Route::get("bed_no/{ward_no}/{nurse_id}",[API_Controller::class,"bed_no"]);

//Route::get("patient_admission_list",[API_Controller::class,"patient_admission_list"]);

//report admin
Route::post("report_admin",[API_Controller::class,"report_admin"]);
Route::get("report_admin_list/{uhid}",[API_Controller::class,"report_admin_list"]);

//service_master
Route::post("service_master",[API_Controller::class,"service_master"]);
Route::get("service_master_list",[API_Controller::class,"service_master_list"]);

//medicine_details
Route::post("medicine_details",[API_Controller::class,"medicine_details"]);
Route::get("medicine_details_list/{uhid}",[API_Controller::class,"medicine_details_list"]);

//history medical
Route::post("his_medical",[API_Controller::class,"his_medical"]);
Route::get("his_medical_list",[API_Controller::class,"his_medical_list"]);

//history surgicaL
Route::post("his_surgical",[API_Controller::class,"his_surgical"]);
Route::get("his_surgical_list",[API_Controller::class,"his_surgical_list"]);

//history family
Route::post("his_family",[API_Controller::class,"his_family"]);
Route::get("his_family_list",[API_Controller::class,"his_family_list"]);

//history vaccination
Route::post("his_vaccine",[API_Controller::class,"his_vaccine"]);
Route::get("his_vaccine_list",[API_Controller::class,"his_vaccine_list"]);

//history drug allergy
Route::post("his_drugallergy",[API_Controller::class,"his_drugallergy"]);
Route::get("his_drugallergy_list",[API_Controller::class,"his_drugallergy_list"]);

