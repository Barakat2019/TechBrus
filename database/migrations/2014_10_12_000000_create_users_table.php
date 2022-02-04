<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 60);
            $table->string('password');
            $table->string('name', 60);
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('phone_country_code', 5);
            $table->string('phone_number', 15);
            //  $table->tinyInteger('level', 4);
            // $table->tinyInteger('is_marketable', 4);
            // $table->tinyInteger('is_premium', 1);
            $table->string('v1_password', 255);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
