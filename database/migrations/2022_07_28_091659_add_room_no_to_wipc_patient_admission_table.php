<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomNoToWipcPatientAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wipc_patient_admission', function (Blueprint $table) {
            $table->string('room_no')->after('ward_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wipc_patient_admission', function (Blueprint $table) {
            $table->dropColumn('room_no');
        });
    }
}
