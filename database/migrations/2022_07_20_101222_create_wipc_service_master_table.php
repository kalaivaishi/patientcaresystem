<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcServiceMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_service_master', function (Blueprint $table) {
            $table->increments('service_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('ward_no');
            $table->string('bed_no');
            $table->time('request_time');
            $table->time('response_time');
            $table->string('service_given');
            $table->string('call_type');
            $table->integer('user_id');
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
        Schema::dropIfExists('wipc_service_master');
    }
}
