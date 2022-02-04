<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMdProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');
            $table->string('barcode',50);
            $table->decimal('unit_price',10,2);
            $table->decimal('vat',10,2);
            $table->decimal('shipping_fee',10,2);
            $table->decimal('shipping_fee_vat',10,2);
            $table->decimal('unit_price_usd',10,2);
            $table->decimal('height',7,2);
            $table->decimal('weight',7,2);
            $table->decimal('length',7,2);
            $table->mediumInteger('stock');
            $table->tinyInteger('is_taxable');
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
        Schema::dropIfExists('md_products');
    }
}
