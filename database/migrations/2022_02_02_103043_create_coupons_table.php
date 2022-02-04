<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('subtitle', 255);
            $table->text('description');
            $table->string('code', 50);
            $table->string('type', 255);
            $table->decimal('amount', 7, 2);
            $table->string('amount_type', 255);
            $table->integer('usage_limit_per_coupon');
            $table->integer('usage_limit_per_user');
            $table->decimal('minimum_purchase', 7, 2);
            $table->decimal('maximum_purchase', 7, 2);
            $table->json('conditions');
            $table->json('rewards');
            $table->json('apply_to');
            $table->tinyInteger('can_merge_with_other_coupons');
            $table->tinyInteger('redeem_reward_only_once');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
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
        Schema::dropIfExists('coupons');
    }
}
