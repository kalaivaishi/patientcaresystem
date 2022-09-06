<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcMedicationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_medication_details', function (Blueprint $table) {
            $table->increments('medication_id');
            $table->string('UHID');
            $table->string('admission_id');
            $table->string('medicine_name');
            $table->string('consultant_name');
            $table->date('prescription_date');
            $table->string('dossage');
            $table->string('duration');
            $table->date('DOA');
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
        Schema::dropIfExists('wipc_medication_details');
    }
}
