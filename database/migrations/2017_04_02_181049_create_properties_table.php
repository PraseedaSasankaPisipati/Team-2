<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table){
	    $table->increments('id');
		$table->string('property_name');
        $table->string('property_address');
		$table->string('number_of_buildings');
		$table->integer('propertymanager_id')->unsigned();
		$table->timestamps();
		});
		
		Schema::table('properties', function (Blueprint $table) {
           $table->foreign('propertymanager_id')->references('id')->on('propertymanagers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('properties');
    }
}
