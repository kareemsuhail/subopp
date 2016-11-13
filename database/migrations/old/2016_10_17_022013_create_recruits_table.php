<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned()->nullable();
            $table->foreign('job_id', 'fk_1768_job')->references('id')->on('jobs');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_1768_user')->references('id')->on('users');
            $table->date('end_date')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruits');
    }
}
