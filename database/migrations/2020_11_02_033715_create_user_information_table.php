<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id');
            $table->char('user_first_name', 20);
            $table->char('user_last_name', 40);
            $table->string('user_address');
            $table->unsignedBigInteger('user_telephone');
            $table->date('user_birth_date');
            $table->enum('user_gender', ['male', 'female']);
            $table->string('user_nationality');
            $table->string('user_avatar');
            $table->timestamps();
        });

        Schema::table('user_information', function($table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_information');
    }
}
