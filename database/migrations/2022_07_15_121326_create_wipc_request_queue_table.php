<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcRequestQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_request_queue', function (Blueprint $table) {
            $table->increments("reqqueue_id");
            $table->string("request_patient_id");
            $table->string("request_nurse_id");
            $table->string("request_doctor_id");
            $table->string("request_pharmacy_id");
            $table->string("request_attendant_id");
            $table->date("request_date");
            $table->time("request_time");
            $table->timeTz("acknowledged_time");
            $table->time("completed_time");
            $table->time("re_routed_time");
            $table->string("call_id");
            $table->string("request_assigned_to");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wipc_request_queue');
    }
}
