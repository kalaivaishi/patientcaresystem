<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcPatientHealthMonitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_patient_health_monitor', function (Blueprint $table) {
            $table->increments('health__monitor_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('ward_no');
            $table->string('room_no');
            $table->string('bed_no');
            $table->string('temperature');
            $table->string('bp');
            $table->string('respirations_rate');
            $table->string('weight');
            $table->string('bmi');
            $table->string('heart_rate');
            $table->string('body_mass');
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
        Schema::dropIfExists('wipc_patient_health_monitor');
    }
}
