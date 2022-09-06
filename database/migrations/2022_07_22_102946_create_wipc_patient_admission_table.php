<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcPatientAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_patient_admission', function (Blueprint $table) {
            $table->increments('patient_admission_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('ward_no');
            $table->string('bed_no');
            $table->date('DOA');
            $table->string('consultant_name');
            $table->string('admission_purpose');
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("gender");
            $table->string("mobile_no1");
            $table->string("mobile_no2");
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
        Schema::dropIfExists('wipc_patient_admission');
    }
}
