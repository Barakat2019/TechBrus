<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('referral_id');
            $table->bigInteger('order_id');
            $table->bigInteger('product_id');
            $table->bigInteger('product_review_id');
            $table->bigInteger('redeemed_by');
            $table->text('description');
            $table->decimal('amount', 7, 2);
            $table->string('type', 255);
            $table->tinyInteger('is_redeemed');
            $table->timestamp('expired_at');
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
        Schema::dropIfExists('rewards');
    }
}
