<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	public function up()
	{
		Schema::create('payment', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('order_id')->unsigned();
			$table->string('type', 255);
		});
	}

	public function down()
	{
		Schema::drop('payment');
	}
}