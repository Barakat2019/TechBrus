<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->tinyInteger('shipment_type');
            $table->string('distribution', 255);
            $table->text('description');
            $table->string('shipping_duration', 255);
            $table->decimal('shipping_fee', 10, 2);
            $table->decimal('free_shipping_threshold', 10, 2);
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
        Schema::dropIfExists('shipment_options');
    }
}
