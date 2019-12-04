<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingSettingsTable extends Migration {

	public function up()
	{
		Schema::create('shipping_settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->datetime('date');
			$table->string('address', 255)->nullable();
			$table->string('latitude', 255);
			$table->string('longitude', 255)->nullable();
			$table->integer('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('shipping_settings');
	}
}