<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipcDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipc_department', function (Blueprint $table) {
            $table->increments("department_id");
            $table->string("name");
            $table->string("feedback_admin_id");
            $table->string("full_access_admin_id");
            $table->string("app_id");
            $table->string("app_name");
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
        Schema::dropIfExists('wipc_department');
    }
}
