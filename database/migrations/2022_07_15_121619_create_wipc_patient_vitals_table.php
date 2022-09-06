<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcPatientVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_patient_vitals', function (Blueprint $table) {
            $table->increments("patientvital_id");
            $table->date("date");
            $table->time("time");
            $table->string("temperature");
            $table->string("pulse");
            $table->string("respirations");
            $table->string("blood_pressure");
            $table->string("blood_sugar_F");
            $table->string("blood_sugar_R");
            $table->string("spo2");
            $table->string("any_allergies");
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
        Schema::dropIfExists('wipc_patient_vitals');
    }
}
