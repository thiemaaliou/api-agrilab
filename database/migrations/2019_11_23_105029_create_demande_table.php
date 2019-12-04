<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandeTable extends Migration {

	public function up()
	{
		Schema::create('demande', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('label', 255);
			$table->string('description', 255)->nullable();
			$table->datetime('date_start_validity');
			$table->datetime('date_end_validty');
			$table->string('logo', 255)->nullable();
			$table->string('latitude', 255);
		});
	}

	public function down()
	{
		Schema::drop('demande');
	}
}