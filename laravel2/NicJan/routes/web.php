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

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/pedido', function () {
    return view('pedido');
});
Route::get('/cliente', function () {
    return view('cliente');
});
Route::get('/categoria', function () {
    return view('categoria');
});
Route::get('/contato', "ContatoController@index");
Route::get('/pedido', "PedidoController@index");
Route::get('/produto', "ProdutoController@index");
Route::get('/cliente', "ClienteController@index");
Route::get('/categoria', "CategoriaController@index");

Route::post('/contato/inserir','ContatoController@store');
Route::post('/pedido/inserir','PedidoController@store');
Route::post('/produto/inserir','ProdutoController@store');
Route::post('/cliente/inserir','ClienteController@store');
Route::post('/categoria/inserir','CategoriaController@store');


Route::get('/contato/{id}','ContatoController@destroy');
Route::get('/cliente/{id}','ClienteController@destroy');
Route::get('/pedido/{id}','PedidoController@destroy');
Route::get('/produto/{id}','ProdutoController@destroy');
Route::get('/categoria/{id}','CategoriaController@destroy');



