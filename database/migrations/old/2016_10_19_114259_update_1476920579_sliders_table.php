<?php



use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;



class Update1476920579SlidersTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::table('sliders', function (Blueprint $table) {

            $table->renameColumn('Description', 'description');

            $table->integer('status_id')->unsigned()->nullable();

            $table->foreign('status_id', 'fk_1715_status')->references('id')->on('statuses');

            

        });

    }



    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::table('sliders', function (Blueprint $table) {

            $table->renameColumn('description','Description');

            $table->dropColumn('');

            

        });

    }

}