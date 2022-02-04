<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('parent_id');
            $table->string('status', 20);
            $table->string('transaction_id', 20);
            $table->string('transaction_method', 255);
            $table->string('transaction_type', 255);
            $table->tinyInteger('post_status');
            $table->tinyInteger('refund_type');
            $table->string('payer_id');
            $table->decimal('shipping_fee', 10, 2);
            $table->decimal('cross_border_shipping_fee', 10, 2);
            $table->decimal('us_domestic_shipping_fee', 10, 2);
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
        Schema::dropIfExists('orders');
    }
}
