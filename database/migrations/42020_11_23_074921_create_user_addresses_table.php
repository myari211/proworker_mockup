<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('country');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
            $table->string('street_address');
            $table->string('postal');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::table('user_address', function ($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
}
