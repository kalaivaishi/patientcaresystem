<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCafeServicesToWipcCallList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wipc_call_list', function (Blueprint $table) {
             $table->string('cafe_service')->after('service_given');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wipc_call_list', function (Blueprint $table) {
            $table->dropColumn('cafe_service');
        });
    }
}
