<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcNurseAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_nurse_assignment', function (Blueprint $table) {
            $table->increments("nurseassign_id");
            $table->string("floor_no");
            $table->string("ward_no");
            $table->string("room_no");
            $table->string("bed_no");
            $table->string("nurse_station_id");
            $table->string("nurse_id");
            $table->string("shift_name");
            $table->string("days_id");
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
        Schema::dropIfExists('wipc_nurse_assignment');
    }
}
