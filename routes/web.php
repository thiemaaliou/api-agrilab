<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', 'UsersController');
Route::resource('products', 'ProductsController');
Route::resource('comment', 'CommentController');
Route::resource('userstype', 'UsersTypeController');
Route::resource('usersstatus', 'UsersStatusController');
Route::resource('usersgroup', 'UsersGroupController');
Route::resource('productstatus', 'ProductStatusController');
Route::resource('productstate', 'ProductStateController');
Route::resource('notes', 'NotesController');
Route::resource('productprices', 'ProductPricesController');
Route::resource('shippingsettins', 'ShippingSettinsController');
Route::resource('demandetype', 'DemandeTypeController');
Route::resource('demande', 'DemandeController');
Route::resource('images', 'ImagesController');
Route::resource('order', 'OrderController');
Route::resource('payment', 'PaymentController');
Route::resource('ordersgroup', 'OrdersGroupController');
