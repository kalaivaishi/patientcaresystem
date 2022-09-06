<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryVendorMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_vendor_master', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('vendor_short_name');
            $table->string('contact_person');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('pin_code');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('fax_no');
            $table->string('email');
            $table->string('website');
            $table->string('tax_id');
            $table->string('rating');
            $table->string('afc_code');
            $table->string('type_char');
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
        Schema::dropIfExists('inventory_vendor_master');
    }
}
