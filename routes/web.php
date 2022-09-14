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

Route::resource('menuProduct', App\Http\Controllers\MenuProductController::class);

Route::get('/cardapio/{menu}', 'App\Http\Controllers\MenuController@showPublic')->name('menu.public.show');
