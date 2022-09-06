<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcCallTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_call_type', function (Blueprint $table) {
             $table->increments("call_type_id");
            $table->string("department_id");
            $table->string("short_description");
            $table->string("description");
            $table->string("max_time");
            $table->string("reporting_user");
            $table->date("date_created");
            $table->string("created_by");
            $table->string("user_role_assigned");
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
        Schema::dropIfExists('wipc_call_type');
    }
}
