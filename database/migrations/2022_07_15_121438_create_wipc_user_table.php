<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_user', function (Blueprint $table) {
            $table->increments("user_id");
            $table->string("user_name");
            $table->string("password");
            $table->string("department_id");
            $table->string("user_type");
            $table->string("name");
            $table->time("login_time");
            $table->date("date");
            $table->time("logout_time");
            $table->string("checkin_status");
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
        Schema::dropIfExists('wipc_user');
    }
}
