<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('shipment_option_id');
            $table->json('product_name');
            $table->integer('quantity');
            $table->decimal('supply_price', 10, 2);
            $table->decimal('supply_vat', 10, 2);
            $table->decimal('price', 10, 2);
            $table->decimal('vat', 10, 2);
            $table->decimal('line_total', 10, 2);
            $table->decimal('coupon_discount', 10, 2);
            $table->decimal('point_discount', 10, 2);
            $table->decimal('line_total_discounted', 10, 2);
            $table->tinyInteger('on_sale');
            $table->tinyInteger('shipment_type');
            $table->tinyInteger('pricing_type');
            $table->tinyInteger('special_type');
            $table->tinyInteger('freebie_type');
            $table->tinyInteger('is_set');
            $table->tinyInteger('is_near_expiration');
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
        Schema::dropIfExists('order_details');
    }
}
