<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_beds', function (Blueprint $table) {
            $table->increments("bed_id");
            $table->string("floor_no");
            $table->string("ward_no");
            $table->string("room_no");
            $table->string("bed_no");
            $table->string("bed_type");
            $table->string("concatenate_string");
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
        Schema::dropIfExists('wipc_beds');
    }
}
