<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('md_product_id');
            $table->json('name');
            $table->json('slug');
            $table->json('description');
            $table->json('notice');
            $table->json('note');
            $table->string('sku', 200);
            $table->string('status', 60);
            $table->string('barcode', 15);
            $table->string('warehouse_operation_location', 10);
           /*  $table->tinyInteger('on_sale');
            $table->tinyInteger('merchant_locale');
            $table->tinyInteger('shipment_type');
            $table->tinyInteger('pricing_type');
            $table->tinyInteger('special_type');
            $table->tinyInteger('freebie_type');
            $table->tinyInteger('is_set');
            $table->tinyInteger('is_premium');
            $table->tinyInteger('is_near_expiration');
            $table->tinyInteger('deduct_by'); */
            //$table->mediumInteger('max_purchase', 8);
            $table->timestamp('published_at');
            $table->decimal('compare_price', 8, 2);
            $table->decimal('regular_price', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->date('sale_start');
            $table->date('sale_end');
            $table->decimal('premium_compare_price', 8, 2);
            $table->decimal('premium_regular_price', 8, 2);
            $table->decimal('premium_sale_price', 8, 2);
            $table->date('premium_sale_start');
            $table->date('premium_sale_end');
            $table->date('new_sale_start');
            $table->date('new_sale_end');
            $table->text('meta_title');
            $table->text('og_url');
            $table->text('og_image');
            $table->text('meta_description');
            $table->text('robots');
            $table->text('canonical');
          //  $table->bigInteger('md_brand_id');
          //  $table->bigInteger('updated_by');
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
        Schema::dropIfExists('products');
    }
}
