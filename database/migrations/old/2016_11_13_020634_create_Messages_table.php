<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('to_id')->unsigned();
            $table->foreign('to_id')->references('id')->on('users');
            $table->integer('from_id')->unsigned();
            $table->foreign('from_id')->references('id')->on('users');
            $table->enum('status', array('new', 'read'))->default('new');
            $table->string('title', 128)->nullable();
            $table->text('content');
            $table->softDeletes();
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
        Schema::dropIfExists('message');
    }
}
