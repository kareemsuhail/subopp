<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1476661619BidTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bid_types', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bid_types', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            
        });
    }
}
