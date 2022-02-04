<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMdBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md_brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('image_id');
            $table->json('name');
            $table->json('slug');
            $table->json('description');
            $table->text('status');
            $table->string('photo',255);
            $table->tinyInteger('is_featured');
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->text('meta_title');
            $table->text('og_url');
            $table->text('og_image');
            $table->text('meta_description');
            $table->text('robots');
            $table->text('canonical');
            $table->softDeletes();
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
        Schema::dropIfExists('md_brands');
    }
}
