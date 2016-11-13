<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->integer('spical_id')->unsigned()->nullable();
            $table->foreign('spical_id', 'fk_1741_spical')->references('id')->on('spicals');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_1741_user')->references('id')->on('users');
            
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
        Schema::dropIfExists('teams');
    }
}
