<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductPricesTable extends Migration {

	public function up()
	{
		Schema::create('product_prices', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('price');
			$table->integer('product_quatity');
			$table->integer('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('product_prices');
	}
}