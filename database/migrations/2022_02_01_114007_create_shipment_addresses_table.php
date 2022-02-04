<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shipment_id');
            $table->unsignedBigInteger('user_id');
            $table->string('methods',255);
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('address_line_1',255);
            $table->string('address_line_2',255);
            $table->string('address_line_3',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->string('zip_code',255);
            $table->string('country',255);
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
        Schema::dropIfExists('shipment_addresses');
    }
}
