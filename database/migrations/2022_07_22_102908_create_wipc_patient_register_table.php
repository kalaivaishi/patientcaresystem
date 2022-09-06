<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcPatientRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_patient_register', function (Blueprint $table) {
            $table->increments('patient_register_id');
            $table->string('UHID');
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("age");
            $table->date("dob");
            $table->string("gender");
            $table->date("DOR");
            $table->string("mobile_no");
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
        Schema::dropIfExists('wipc_patient_register');
    }
}
