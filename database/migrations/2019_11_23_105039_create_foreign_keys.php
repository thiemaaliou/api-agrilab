<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('user_type_id')->references('id')->on('user_type')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('user_status_id')->references('id')->on('user_status')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('user_group_id')->references('id')->on('user_group')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('product_state_id')->references('id')->on('product_state')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('product_status_id')->references('id')->on('product_status')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('created_by')->references('id')->on('user')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('product_prices', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('shipping_settings', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('order', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('payment', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('order')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('orders_group', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('orders_group', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('product_status')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_user_type_id_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_user_status_id_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_user_group_id_foreign');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_product_state_id_foreign');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_product_status_id_foreign');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_created_by_foreign');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->dropForeign('comment_user_id_foreign');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->dropForeign('comment_product_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_product_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_user_id_foreign');
		});
		Schema::table('product_prices', function(Blueprint $table) {
			$table->dropForeign('product_prices_product_id_foreign');
		});
		Schema::table('shipping_settings', function(Blueprint $table) {
			$table->dropForeign('shipping_settings_product_id_foreign');
		});
		Schema::table('order', function(Blueprint $table) {
			$table->dropForeign('order_product_id_foreign');
		});
		Schema::table('payment', function(Blueprint $table) {
			$table->dropForeign('payment_order_id_foreign');
		});
		Schema::table('orders_group', function(Blueprint $table) {
			$table->dropForeign('orders_group_user_id_foreign');
		});
		Schema::table('orders_group', function(Blueprint $table) {
			$table->dropForeign('orders_group_status_id_foreign');
		});
	}
}