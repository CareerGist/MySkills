<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('skills')) { 
            //do nothing
         }
         else
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('sid');
            $table->string('category', 80);
            $table->string('skill', 100);
            $table->string('description', 170)->nullable();
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
        Schema::drop('skills');
    }
}
