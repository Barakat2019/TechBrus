<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('image_id');
            $table->json('name');
            $table->json('slug');
            $table->text('status');
            $table->tinyInteger('is_best_seller');
            $table->tinyInteger('is_main');
            $table->text('meta_title');
            $table->text('og_url');
            $table->text('og_image');
            $table->text('meta_description');
            $table->text('robots');
            $table->text('canonical');
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('categories');
    }
}
