<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentTable extends Migration {

	public function up()
	{
		Schema::create('comment', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->longText('content');
			$table->integer('user_id')->unsigned();
			$table->integer('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('comment');
	}
}