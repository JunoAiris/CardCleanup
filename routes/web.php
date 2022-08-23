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

Route::get('/', 'App\Http\Controllers\Cardapio@GateCardapio');

Route::get('/Cardapio', 'App\Http\Controllers\Cardapio@GateCardapio');

Route::get('/Pedidos', 'App\Http\Controllers\Pedidos@GatePedidos');

Route::get('/Cliente_Pedidos', 'App\Http\Controllers\ClientePedidos@GateClientePedidos');

Route::get('/Edit_Cardapios', 'App\Http\Controllers\EditCardapios@GateEditCardapios');

Route::get('/Edit_Estabelecimento', 'App\Http\Controllers\EditEstabelecimento@GateEditEstabelecimento');

Route::get('/Edit_Funcionarios', 'App\Http\Controllers\EditFuncionarios@GateEditFuncionarios');

Route::get('/Edit_Pedidos', 'App\Http\Controllers\EditPedidos@GateEditPedidos');

Route::resource('/Produtos', App\Http\Controllers\ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::middleware('auth')->group(function(){
  Route::resource('user', App\Http\Controllers\UserController::class);
});
