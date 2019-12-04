<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('firstname', 255);
			$table->string('lastname', 255);
			$table->string('address', 255);
			$table->string('phone', 20)->nullable();
			$table->string('latitude', 100)->nullable();
			$table->string('longitude', 100)->nullable();
			$table->string('login', 255)->unique()->nullable();
			$table->string('password', 255);
			$table->datetime('last_conexion_time')->nullable();
			$table->integer('user_type_id')->unsigned();
			$table->integer('user_status_id')->unsigned();
			$table->integer('user_group_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}