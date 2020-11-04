<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('education_degree');
            $table->string('education_institute_name');
            $table->string('education_field_of_study');
            $table->date('education_start_date');
            $table->date('education_end_date');
            $table->string('education_description')->nullable();
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::table('education', function (Blueprint $table) {
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
        Schema::dropIfExists('education');
    }
}
