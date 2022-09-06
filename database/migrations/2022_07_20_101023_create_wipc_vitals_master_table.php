<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcVitalsMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_vitals_master', function (Blueprint $table) {
            $table->increments('vitals_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('temperature');
            $table->string('pulse');
            $table->string('heart_rate');
            $table->string('respirations_rate');
            $table->string('oxygen');
            $table->string('BP');
            $table->string('BS');
            $table->dateTime('date_time');
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
        Schema::dropIfExists('wipc_vitals_master');
    }
}
