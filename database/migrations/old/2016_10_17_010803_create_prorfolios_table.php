<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProrfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prorfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id', 'fk_1747_type')->references('id')->on('types');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_1747_user')->references('id')->on('users');
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id', 'fk_1747_team')->references('id')->on('teams');
            
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
        Schema::dropIfExists('prorfolios');
    }
}
