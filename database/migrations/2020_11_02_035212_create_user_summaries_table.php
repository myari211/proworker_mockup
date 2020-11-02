<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_summaries', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id');
            $table->string('summary_name');
            $table->string('summary_details')->nullable();
            $table->timestamps();
        });

        Schema::table('user_summaries', function($table){
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
        Schema::dropIfExists('user_summaries');
    }
}
