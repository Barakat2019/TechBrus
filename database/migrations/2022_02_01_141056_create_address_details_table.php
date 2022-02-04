<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('address_id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',100);
            $table->string('phone_number',15);
            $table->string('method',50);
            $table->string('address_line_1',255);
            $table->string('address_line_2',255);
            $table->string('address_line_3',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->string('zip_code',255);
            $table->string('country',255);
            $table->string('country_code',255);

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
        Schema::dropIfExists('address_details');
    }
}
