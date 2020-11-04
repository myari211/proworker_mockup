<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_skills', function(Blueprint $table){
            $table->string('id');
            $table->string('skills_id');
            $table->string('users_id');
            $table->timestamps();
        });

        Schema::table('users_skills', function($table){
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('users_id')->references('id')->on('users');
            $table->primary(['skills_id', 'users_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
