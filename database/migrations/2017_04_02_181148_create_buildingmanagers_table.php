<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingmanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildingmanagers', function (Blueprint $table){
	    $table->increments('id');
		$table->string('buildingmanager_name');
        $table->string('buildingmanager_mobilephone');
		$table->string('buildingmanager_email');
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
        Schema::drop('buildingmanagers');
    }
}
