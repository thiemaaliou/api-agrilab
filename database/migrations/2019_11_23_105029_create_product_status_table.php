<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductStatusTable extends Migration {

	public function up()
	{
		Schema::create('product_status', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255)->unique();
		});
	}

	public function down()
	{
		Schema::drop('product_status');
	}
}