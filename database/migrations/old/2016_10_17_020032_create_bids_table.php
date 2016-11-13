<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned()->nullable();
            $table->foreign('job_id', 'fk_1766_job')->references('id')->on('jobs');
            $table->integer('price')->nullable();
            $table->string('length')->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id', 'fk_1766_type')->references('id')->on('types');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_1766_user')->references('id')->on('users');
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id', 'fk_1766_team')->references('id')->on('teams');
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id', 'fk_1766_status')->references('id')->on('statuses');
            $table->integer('bidtype_id')->unsigned()->nullable();
            $table->foreign('bidtype_id', 'fk_1766_bidtype')->references('id')->on('bid_types');
            
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
        Schema::dropIfExists('bids');
    }
}
