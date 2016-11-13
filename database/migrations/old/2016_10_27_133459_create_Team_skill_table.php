<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_skill', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id', 'fk_1721_teams')->references('id')->on('teams');

            $table->integer('skill_id')->unsigned()->nullable();
            $table->foreign('skill_id', 'fk_1722_skills')->references('id')->on('skills');


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
        Schema::dropIfExists('team_skill');
    }
}
