<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('estabelecimentos', App\Http\Controllers\EstablishmentController::class);

Route::resource('cardapios', App\Http\Controllers\MenuController::class);

Route::resource('pedidos', App\Http\Controllers\OrderController::class);

Route::resource('produtos', App\Http\Controllers\ProductController::class);

Route::middleware('auth')->group(function(){
  Route::resource('user', App\Http\Controllers\UserController::class);
});

Route::resource('menuProduct', App\Http\Controllers\MenuProductController::class)->only(['store','destroy']);

Route::get('/cardapio/{menu}', 'App\Http\Controllers\MenuController@showPublic')->name('menu.public.show');

Route::post('/menuProduct/{id}', 'App\Http\Controllers\MenuProductController@store')->name('MenuProductStore');

Route::delete('/menuProduct/{menu_id}/{product_id}', 'App\Http\Controllers\MenuProductController@destroy')->name('MenuProductDestroy');

Route::get('/pedido/{id}', 'App\Http\Controllers\OrderController@showPublic')->name('order.public.show');

Route::post('/orderProduct/{id}', 'App\Http\Controllers\OrderProductController@store')->name('OrderProductStore');

Route::delete('/orderProduct/{order_id}/{product_id}', 'App\Http\Controllers\OrderProductController@destroy')->name('OrderProductDestroy');
