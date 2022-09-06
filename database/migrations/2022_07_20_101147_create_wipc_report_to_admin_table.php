<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcReportToAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_report_to_admin', function (Blueprint $table) {
            $table->increments('report_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('complaint');
            $table->string('feedback');
            $table->string('suggestions');
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
        Schema::dropIfExists('wipc_report_to_admin');
    }
}
