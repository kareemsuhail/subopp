<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skill', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_1719_users')->references('id')->on('users');

            $table->integer('skill_id')->unsigned()->nullable();
            $table->foreign('skill_id', 'fk_1720_skills')->references('id')->on('skills');


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
        Schema::dropIfExists('user_skill');
    }
}
