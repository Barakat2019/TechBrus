<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->text('meta_title');
            $table->text('og_url');
            $table->text('og_image');
            $table->text('meta_description');
            $table->text('robots');
            $table->text('canonical');
            $table->bigInteger('desktop_image_id');
            $table->bigInteger('mobile_image_id');
            $table->bigInteger('thumbnail_image_id');
            $table->string('status', 255);
            $table->text('description');
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
        Schema::dropIfExists('tags');
    }
}
