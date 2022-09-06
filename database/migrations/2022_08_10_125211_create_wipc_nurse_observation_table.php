<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcNurseObservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_nurse_observation', function (Blueprint $table) {
            $table->increments('observation_id');
            $table->string('description');
            $table->string('background');
            $table->string('consultant_id');
            $table->string('nurse_id');
            $table->string('call_type_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('ward_no');
            $table->string('room_no');
            $table->string('bed_no');
            $table->time('escaltate_time');
            $table->date('escaltate_date');
            $table->string('status');
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
        Schema::dropIfExists('wipc_nurse_observation');
    }
}
