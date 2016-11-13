<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Requests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->index()->unsigned();
            $table->integer('reciver_id')->index()->unsigned();
           $table->integer('team_id')->index()->unsigned();
            $table->text("status");
            $table->foreign('sender_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('reciver_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('team_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');

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
        Schema::dropIfExists('requests');
    }
}
