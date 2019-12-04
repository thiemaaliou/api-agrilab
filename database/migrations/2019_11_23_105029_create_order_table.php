<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('order', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id')->unsigned();
			$table->integer('product_quantity');
			$table->integer('amount');
			$table->string('devise', 20)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('order');
	}
}