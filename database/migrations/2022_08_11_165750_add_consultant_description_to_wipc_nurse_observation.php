<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConsultantDescriptionToWipcNurseObservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wipc_nurse_observation', function (Blueprint $table) {
            $table->string('consultant_description')->after('background');
            $table->string('consultant_background')->after('consultant_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wipc_nurse_observation', function (Blueprint $table) {
            $table->dropColumn('consultant_description');
            $table->dropColumn('consultant_background');
        });
    }
}
