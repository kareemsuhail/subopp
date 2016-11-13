<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_1765_user')->references('id')->on('users');
            $table->integer('price')->nullable();
            $table->integer('length')->nullable();
            $table->text('description')->nullable();
            $table->string('specialty')->nullable();
            $table->string('skills')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
