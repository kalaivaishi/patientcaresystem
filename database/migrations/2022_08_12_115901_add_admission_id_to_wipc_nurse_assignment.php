<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdmissionIdToWipcNurseAssignment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wipc_nurse_assignment', function (Blueprint $table) {
            $table->string('admission_id')->after('UHID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wipc_nurse_assignment', function (Blueprint $table) {
            $table->dropColumn('admission_id');
        });
    }
}
