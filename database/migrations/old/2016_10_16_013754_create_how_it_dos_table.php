<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHowItDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_it_dos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(false);
            $table->string('short_info')->nullable(false);
            $table->text('Description')->nullable(false);
            $table->string('image')->nullable();
            $table->string('video_url')->nullable(false);
            
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
        Schema::dropIfExists('how_it_dos');
    }
}
