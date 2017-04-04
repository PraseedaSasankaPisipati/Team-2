<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table){
	    $table->increments('id');
		$table->integer('worker_id')->unsigned();
		$table->integer('complaint_id');
        $table->string('worker_mobilephone');
		$table->string('order_description');
		$table->string('order_est_cost');
		$table->string('order_actual_cost');
		$table->string('order_date');
		$table->string('order_completion_date');
        $table->string('order_status'); 
		$table->timestamps();
		});
		Schema::table('workorders', function (Blueprint $table) {
           $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workorders');
    }
}