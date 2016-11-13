<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleSaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_says', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(false);
            $table->string('jobtitle')->nullable(false);
            $table->text('say')->nullable(false);
            $table->string('image')->nullable();
            
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
        Schema::dropIfExists('people_says');
    }
}
