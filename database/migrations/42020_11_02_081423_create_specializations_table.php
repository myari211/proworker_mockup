<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('specialization_name');
            $table->string('category_name');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::table('specializations', function($table) {
            $table->foreign('category_name')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specializations');
    }
}
