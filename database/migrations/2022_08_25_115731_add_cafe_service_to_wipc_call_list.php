<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCafeServiceToWipcCallList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wipc_call_list', function (Blueprint $table) {
            $table->string('escalate_call_id')->after('call_type_id');
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
            $table->dropColumn('escalate_call_id');
        });
    }
}
