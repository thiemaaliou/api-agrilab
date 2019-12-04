<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersGroupTable extends Migration {

	public function up()
	{
		Schema::create('orders_group', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('orders_id', 255);
			$table->integer('orders_amount');
			$table->integer('user_id')->unsigned();
			$table->integer('status_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('orders_group');
	}
}