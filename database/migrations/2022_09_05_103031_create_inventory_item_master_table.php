<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryItemMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_item_master', function (Blueprint $table) {
            $table->id();
            $table->string('belongs_to');
            $table->string('item_category');
            $table->string('item_name');
            $table->string('short_code');
            $table->string('packaging');
            $table->string('contain');
            $table->string('unit');
            $table->string('conversion_factor');
            $table->string('hsn_code');
            $table->string('hos_item_code');
            $table->string('gst');
            $table->string('remark');
            $table->string('status');
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
        Schema::dropIfExists('inventory_item_master');
    }
}
