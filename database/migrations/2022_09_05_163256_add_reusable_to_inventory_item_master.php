<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReusableToInventoryItemMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventory_item_master', function (Blueprint $table) {
           $table->string('expiry')->after('status');
           $table->string('is_reusable');
           $table->string('no_reusable');
           $table->string('serial_batch');
           $table->string('reusable_rate');
           $table->string('tpa');
           $table->string('service_charge');
           $table->string('min_quantity');
           $table->string('max_quantity');
           $table->string('reorder_level');
           $table->string('autoindent');
           });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventory_item_master', function (Blueprint $table) {
            $table->dropColumn('expiry');
            $table->dropColumn('is_reusable');
            $table->dropColumn('no_reusable');
            $table->dropColumn('serial_batch');
            $table->dropColumn('reusable_rate');
            $table->dropColumn('tpa');
            $table->dropColumn('service_charge');
            $table->dropColumn('min_quantity');
            $table->dropColumn('max_quantity');
            $table->dropColumn('reorder_level');
            $table->dropColumn('autoindent');
        });
    }
}
