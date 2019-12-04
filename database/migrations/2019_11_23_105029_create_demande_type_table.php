<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandeTypeTable extends Migration {

	public function up()
	{
		Schema::create('demande_type', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 155)->unique();
		});
	}

	public function down()
	{
		Schema::drop('demande_type');
	}
}