<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('complaints', function (Blueprint $table){
	    $table->increments('id');
		$table->integer('building_id')->unsigned();
		$table->string('customer_name');
        $table->string('customer_email');
		$table->string('customer_mobilephone');
		$table->string('customer_aptphone');
		$table->string('customer_complaint');
		$table->string('customer_address');
		$table->timestamps();
		
		});
		 Schema::table('complaints', function (Blueprint $table) {
           $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('complaints');
    }
}