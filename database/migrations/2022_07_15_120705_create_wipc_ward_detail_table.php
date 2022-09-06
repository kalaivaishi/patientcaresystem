<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcWardDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_ward_detail', function (Blueprint $table) {
            $table->increments("ward_id");
            $table->string('ward_number');
            $table->string('floor_number');
            $table->string('nurse_station_id');
            $table->string('ward_type');
            $table->string('ward_style');
            $table->string('ward_level');
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
        Schema::dropIfExists('wipc_ward_detail');
    }
}
