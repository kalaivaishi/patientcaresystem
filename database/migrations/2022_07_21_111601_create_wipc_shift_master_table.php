<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcShiftMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_shift_master', function (Blueprint $table) {
            $table->increments("shift_id");
            $table->string("shift_name");
            $table->time("shift_start_time");
            $table->time("shift_end_time");
            $table->string("description");
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
        Schema::dropIfExists('wipc_shift_master');
    }
}
