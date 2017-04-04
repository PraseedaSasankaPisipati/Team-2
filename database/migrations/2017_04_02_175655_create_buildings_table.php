<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table){
	    $table->increments('id');
		$table->string('building_name');
        $table->string('building_address');
		$table->integer('number_of_apartments');
		$table->integer('buildingmanager_id')->unsigned();
		$table->timestamps();
		});
		
		Schema::table('buildings', function (Blueprint $table) {
           $table->foreign('buildingmanager_id')->references('id')->on('buildingmanagers')->onDelete('cascade');
        });
		
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buildings');
    }
}
