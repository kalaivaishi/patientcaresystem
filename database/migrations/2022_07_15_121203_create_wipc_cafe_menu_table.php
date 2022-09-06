<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcCafeMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_cafe_menu', function (Blueprint $table) {
            $table->increments("cafemenu_id");
            $table->date("date");
            $table->string("juice1");
            $table->string("juice2");
            $table->string("juice3");
            $table->string("juice4");
            $table->string("meal_type1");
            $table->string("meal_type2");
            $table->string("meal_type3");
            $table->string("meal_type4");
            $table->string("snack1");
            $table->string("snack2");
            $table->string("snack3");
            $table->string("snack4");
            $table->string("cake1");
            $table->string("cake2");
            $table->string("cake3");
            $table->string("cake4");
            $table->string("week_day");
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
        Schema::dropIfExists('wipc_cafe_menu');
    }
}
