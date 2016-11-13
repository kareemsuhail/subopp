<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_skill', function (Blueprint $table) {
            $table->increments('id');
            

            $table->integer('skill_id')->unsigned()->nullable();
            $table->foreign('skill_id', 'fk_1717_skills')->references('id')->on('skills');

            $table->integer('job_id')->unsigned()->nullable();
            $table->foreign('job_id', 'fk_1718_jobs')->references('id')->on('jobs');

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
        Schema::dropIfExists('utskills');
    }
}
