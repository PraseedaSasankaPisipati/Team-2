<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertymanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertymanagers', function (Blueprint $table){
	    $table->increments('id');
		$table->string('propertymanager_name');
        $table->string('propertymanager_mobilephone');
		$table->string('propertymanager_email');
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
         Schema::drop('propertymanagers');
    }
}
