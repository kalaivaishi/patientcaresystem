<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryStoreNursingCounterMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_store_nursing_counter_mapping', function (Blueprint $table) {
            $table->id();
            $table->string('store_link_id');
            $table->string('store');
            $table->string('nursing_counter');
            $table->string('department');
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
        Schema::dropIfExists('inventory_store_nursing_counter_mapping');
    }
}
