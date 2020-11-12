<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->string('id');
            $table->string('user_id');
            $table->string('job_role_id');
            $table->string('job_category_id');
            $table->string('work_specialization');
            $table->string('work_company_name');
            $table->string('work_duration');
            $table->date('work_start_date')->nullable();
            $table->date('work_end_date')->nullable();
            $table->date('work_description')->nullable();
            $table->timestamps();
        });

        Schema::table('work_experiences', function($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('job_role_id')->references('id')->on('role_jobs');
            $table->foreign('job_category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_experiences');
    }
}
