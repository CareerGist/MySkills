<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('user_skills')) { 
            //do nothing
        }
        else 
        Schema::create('user_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('uid')->nullable();
            $table->unsignedInteger('sid')->nullable();
            $table->foreign('uid')->references('id')->on('users');
            $table->foreign('sid')->references('sid')->on('skills');
            $table->string('proficiency', 50);
            $table->string('files', 80);
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
        Schema::drop('user_skills');
    }
}
