<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\Calltype_Controller;
use App\Http\Controllers\Ward_detail_Controller;
use App\Http\Controllers\Ward_type_Controller;
use App\Http\Controllers\Ward_style_Controller;
use App\Http\Controllers\Ward_level_Controller;
use App\Http\Controllers\Department_Controller;
use App\Http\Controllers\Nursestation_Controller;
use App\Http\Controllers\Nurseassign_Controller;
use App\Http\Controllers\Rooms_Controller;
use App\Http\Controllers\Beds_Controller;
use App\Http\Controllers\Cafeteria_Controller;
use App\Http\Controllers\Requestqueue_Controller;
use App\Http\Controllers\AwaitingReq_Controller;
use App\Http\Controllers\User_login_Controller;
use App\Http\Controllers\Nurse_register_Controller;
use App\Http\Controllers\Patient_register_Controller;
use App\Http\Controllers\Patient_vitals_Controller;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\Patient_homepage_Controller;
use App\Http\Controllers\Nurse_homepage_Controller;
use App\Http\Controllers\Doctor_homepage_Controller;
use App\Http\Controllers\Inventory_Controller;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get("signup",[Dashboard_Controller::class,"signup"]);
Route::post("register",[Dashboard_Controller::class,"register"]);
Route::get("signin",[Dashboard_Controller::class,"signin"]);
Route::post("login",[Dashboard_Controller::class,"login"]);
Route::get("patient_health_monitor",[Dashboard_Controller::class,"patient_health_monitor"]);
Route::post("health_details",[Dashboard_Controller::class,"health_details"]);

//dashboard menu
Route::get("patient_view",[Dashboard_Controller::class,"patient_view"]);
Route::get("patient_call",[Dashboard_Controller::class,"patient_call"]);
Route::get("dashboard",[Dashboard_Controller::class,"dashboard"]);
Route::get("get_graphical_data/{start_date}/{end_date}",[Dashboard_Controller::class,"get_graphical_data"]);
Route::get("get_tabular_data/{start_date}/{end_date}",[Dashboard_Controller::class,"get_tabular_data"]);


//patient home page
Route::get("patient_homepage",[Patient_homepage_Controller::class,"patient_homepage"]);
Route::post("get_uhid",[Patient_homepage_Controller::class,"get_uhid"]);
Route::post("emergency_call",[Patient_homepage_Controller::class,"emergency_call"]);
Route::post("nurse_call",[Patient_homepage_Controller::class,"nurse_call"]);
Route::get("cafeteria_station",[Patient_homepage_Controller::class,"cafeteria_station"]);
Route::post("cafeteria_call",[Patient_homepage_Controller::class,"cafeteria_call"]);
Route::get("housekeeping_station",[Patient_homepage_Controller::class,"housekeeping_station"]);
Route::post("house_keeping_call",[Patient_homepage_Controller::class,"house_keeping_call"]);
Route::get("vitals",[Patient_homepage_Controller::class,"vitals"]);
Route::get("medication",[Patient_homepage_Controller::class,"medication"]);
Route::get("patient_history_view",[Patient_homepage_Controller::class,"patient_history_view"]);
Route::get("patient_medicine_view",[Patient_homepage_Controller::class,"patient_medicine_view"]);

//nurse home page
Route::get("nurse_homepage",[Nurse_homepage_Controller::class,"nurse_homepage"]);
Route::post("get_nurse_details",[Nurse_homepage_Controller::class,"get_nurse_details"]);
Route::post("get_single_nurse_detail",[Nurse_homepage_Controller::class,"get_single_nurse_detail"]);
Route::get("get_only_emg_call/{ward_no}",[Nurse_homepage_Controller::class,"get_only_emg_call"]);
Route::get("get_only_nurse_call/{ward_no}",[Nurse_homepage_Controller::class,"get_only_nurse_call"]);
Route::post("complete_call",[Nurse_homepage_Controller::class,"complete_call"]);
Route::post("complete_escalate_call",[Nurse_homepage_Controller::class,"complete_escalate_call"]);
Route::post("nurse_observation",[Nurse_homepage_Controller::class,"nurse_observation"]);
Route::post("escalate_call",[Nurse_homepage_Controller::class,"escalate_call"]);
Route::post("consult_observe",[Nurse_homepage_Controller::class,"consult_observe"]);



//doctor home page
Route::get("patient_view",[Doctor_homepage_Controller::class,"patient_view"]);
Route::get("patient_history/{admission_id}",[Doctor_homepage_Controller::class,"patient_history"]);
Route::get("doc_patient_vitals/{admission_id}",[Doctor_homepage_Controller::class,"doc_patient_vitals"]);
Route::get("lab_reports/{admission_id}",[Doctor_homepage_Controller::class,"lab_reports"]);
Route::get("radiology_reports/{admission_id}",[Doctor_homepage_Controller::class,"radiology_reports"]);
Route::get("doc_medication/{admission_id}",[Doctor_homepage_Controller::class,"doc_medication"]);
Route::get("doc_nurse_call/{observation_id}",[Doctor_homepage_Controller::class,"doc_nurse_call"]);
Route::post("nurse_observe",[Doctor_homepage_Controller::class,"nurse_observe"]);
Route::post("consultant_observe",[Doctor_homepage_Controller::class,"consultant_observe"]);
Route::get("doc_patient_call/{admission_id}",[Doctor_homepage_Controller::class,"doc_patient_call"]);
Route::get("alerts",[Doctor_homepage_Controller::class,"alerts"]);
Route::get('escalate_call_list',[Doctor_homepage_Controller::class,"escalate_call_list"]);
Route::get('emergency_call_list',[Doctor_homepage_Controller::class,"emergency_call_list"]);

//Inventory
Route::get("item_master",[Inventory_Controller::class,"item_master"]);
Route::post("save_item_master",[Inventory_Controller::class,"save_item_master"]);
Route::post("save_suppliers",[Inventory_Controller::class,"save_suppliers"]);
Route::post("save_generic",[Inventory_Controller::class,"save_generic"]);
Route::post("save_manufact",[Inventory_Controller::class,"save_manufact"]);

Route::get("item_category_master",[Inventory_Controller::class,"item_category_master"]);
Route::post("save_item_category",[Inventory_Controller::class,"save_item_category"]);
Route::delete("delete_item_category/{item_cate_id}",[Inventory_Controller::class,"delete_item_category"]);

Route::get("item_location_master",[Inventory_Controller::class,"item_location_master"]);
Route::post("save_item_location_master",[Inventory_Controller::class,"save_item_location_master"]);
Route::delete("delete_item_location_master/{item_location_id}",[Inventory_Controller::class,"delete_item_location_master"]);

Route::get("item_manufacturer_master",[Inventory_Controller::class,"item_manufacturer_master"]);
Route::post("save_item_manufacturer",[Inventory_Controller::class,"save_item_manufacturer"]);
Route::delete("delete_item_manufacturer/{item_manufact_id}",[Inventory_Controller::class,"delete_item_manufacturer"]);

Route::get("item_unit_master",[Inventory_Controller::class,"item_unit_master"]);
Route::post("save_item_unit",[Inventory_Controller::class,"save_item_unit"]);
Route::delete("delete_item_unit/{item_unit_id}",[Inventory_Controller::class,"delete_item_unit"]);

Route::get("packaging_master",[Inventory_Controller::class,"packaging_master"]);
Route::post("save_packaging_master",[Inventory_Controller::class,"save_packaging_master"]);
Route::delete("delete_packaging/{item_pack_id}",[Inventory_Controller::class,"delete_packaging"]);

Route::get("store_master",[Inventory_Controller::class,"store_master"]);
Route::post("save_store_master",[Inventory_Controller::class,"save_store_master"]);
Route::delete("delete_store_master/{store_id}",[Inventory_Controller::class,"delete_store_master"]);

Route::get("store_nursing_counter",[Inventory_Controller::class,"store_nursing_counter"]);
Route::post("save_store_nursing_counter",[Inventory_Controller::class,"save_store_nursing_counter"]);
Route::delete("delete_store_nursing_counter/{store_nursing_id}",[Inventory_Controller::class,"delete_store_nursing_counter"]);

Route::get("vendor_master",[Inventory_Controller::class,"vendor_master"]);
Route::post("save_vendor",[Inventory_Controller::class,"save_vendor"]);
Route::delete("delete_vendor/{vendor_id}",[Inventory_Controller::class,"delete_vendor"]);

//report to admin
Route::get("report_admin/{uhid}",[Patient_homepage_Controller::class,"report_admin"]);
Route::post("save_report_admin/{uhid}/{admission_id}",[Patient_homepage_Controller::class,"save_report_admin"]);

//cafe menu
Route::get("cafe_menu",[Cafeteria_Controller::class,"cafe_menu"]);
Route::post("save_cafe_menu",[Cafeteria_Controller::class,"save_cafe_menu"]);
Route::post("complete_cafe_call",[Cafeteria_Controller::class,"complete_cafe_call"]);
Route::post("complete_house_keeping_call",[Cafeteria_Controller::class,"complete_house_keeping_call"]);
Route::get("cafeteria_list",[Cafeteria_Controller::class,"cafeteria_list"]);

//call type
Route::get("call_type",[Calltype_Controller::class,"call_type"]);
Route::post("save_call_type",[Calltype_Controller::class,"save_call_type"]);
Route::get("example",[Calltype_Controller::class,"example"]);
Route::post("save_example",[Calltype_Controller::class,"save_example"]);

//ward detail
Route::get("ward_detail",[Ward_detail_Controller::class,"ward_detail"]);
Route::post("save_ward_detail",[Ward_detail_Controller::class,"save_ward_detail"]);

//ward type
Route::get("ward_type",[Ward_type_Controller::class,"ward_type"]);
Route::post("save_ward_type",[Ward_type_Controller::class,"save_ward_type"]);

//ward style
Route::get("ward_style",[Ward_style_Controller::class,"ward_style"]);
Route::post("save_ward_style",[Ward_style_Controller::class,"save_ward_style"]);

//ward level
Route::get("ward_level",[Ward_level_Controller::class,"ward_level"]);
Route::post("save_ward_level",[Ward_level_Controller::class,"save_ward_level"]);

//department
Route::get("department",[Department_Controller::class,"department"]);
Route::post("save_department",[Department_Controller::class,"save_department"]);

//nurse station
Route::get("nurse_station",[Nursestation_Controller::class,"nurse_station"]);
Route::post("save_nurse_station",[Nursestation_Controller::class,"save_nurse_station"]);
Route::get("nurse_service",[Nursestation_Controller::class,"nurse_service"]);
Route::post("save_nurse_service",[Nursestation_Controller::class,"save_nurse_service"]);

//nurse assignment
Route::get("nurse_assign",[Nurseassign_Controller::class,"nurse_assign"]);
Route::post("save_nurse_assign",[Nurseassign_Controller::class,"save_nurse_assign"]);

//rooms
Route::get("rooms",[Rooms_Controller::class,"rooms"]);
Route::post("save_rooms",[Rooms_Controller::class,"save_rooms"]);
Route::post("ward_drop",[Rooms_Controller::class,"ward_drop"]);

//beds
Route::get("beds",[Beds_Controller::class,"beds"]);
Route::post("save_beds",[Beds_Controller::class,"save_beds"]);
Route::post("ward_drops",[Beds_Controller::class,"ward_drops"]);
Route::post("room_drops",[Beds_Controller::class,"room_drops"]);

//request queue
Route::get("request_queue",[Requestqueue_Controller::class,"request_queue"]);
Route::post("save_request_queue",[Requestqueue_Controller::class,"save_request_queue"]);

//request awaiting
Route::get("awaiting_request",[AwaitingReq_Controller::class,"awaiting_request"]);
Route::post("save_awaiting_request",[AwaitingReq_Controller::class,"save_awaiting_request"]);

//user login
Route::get("user_login",[User_login_Controller::class,"user_login"]);
Route::post("save_user_login",[User_login_Controller::class,"save_user_login"]);

//nurse register
Route::get("nurse_register",[Nurse_register_Controller::class,"nurse_register"]);
Route::post("save_nurse_register",[Nurse_register_Controller::class,"save_nurse_register"]);

//patient register
Route::get("patient_register",[Patient_register_Controller::class,"patient_register"]);
Route::post("save_patient_register",[Patient_register_Controller::class,"save_patient_register"]);

//patient vitals
Route::get("patient_vitals",[Patient_vitals_Controller::class,"patient_vitals"]);
Route::post("save_patient_vitals",[Patient_vitals_Controller::class,"save_patient_vitals"]);

//room type
Route::get("roomtype",[Rooms_Controller::class,"roomtype"]);
Route::post("save_roomtype",[Rooms_Controller::class,"save_roomtype"]);

//bed type
Route::get("bedtype",[Beds_Controller::class,"bedtype"]);
Route::post("save_bedtype",[Beds_Controller::class,"save_bedtype"]);

//floor 
Route::get("floor",[FloorController::class,"floor"]);
Route::post("save_floor",[FloorController::class,"save_floor"]);

//shift master
Route::get("shift_master",[ShiftController::class,"shift_master"]);
Route::post("save_shift_master",[ShiftController::class,"save_shift_master"]);