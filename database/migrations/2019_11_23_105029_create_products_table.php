<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255);
			$table->integer('quantity');
			$table->datetime('date_start_order');
			$table->datetime('date_end_order');
			$table->integer('price');
			$table->integer('product_state_id')->unsigned();
			$table->integer('product_status_id')->unsigned();
			$table->integer('created_by')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}