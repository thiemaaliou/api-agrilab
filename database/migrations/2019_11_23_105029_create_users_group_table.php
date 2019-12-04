<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersGroupTable extends Migration {

	public function up()
	{
		Schema::create('user_group', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255)->unique();
		});
	}

	public function down()
	{
		Schema::drop('user_group');
	}
}