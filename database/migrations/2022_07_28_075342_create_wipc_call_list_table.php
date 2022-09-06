<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcCallListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_call_list', function (Blueprint $table) {
            $table->increments('call_list_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('ward_no');
            $table->string('room_no');
            $table->string('bed_no');
            $table->string('call_type_id');
            $table->string('status_color');
            $table->string('status');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
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
        Schema::dropIfExists('wipc_call_list');
    }
}
