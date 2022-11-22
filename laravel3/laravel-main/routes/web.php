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
 
/* cria rotas para o site */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato', function () {
    return view('contato');
});

Route::get('/pedido', function () {
    return view('pedido'); 
});

Route::get('/cliente', function () {
    return view('cliente'); 
});

Route::get('/produto', function () {
    return view('produto'); 
});

Route::get('/categoria', function () {
    return view('categoria');
});



Route::get('/contatoadm', function () {
    return view('contatoadm'); 
});



//consultas
Route::get('/contato','ContatoController@index');
Route::get('/categoria','CategoriaController@index');
//para consultas de nome e produto
Route::post('/welcome/pesquisa', 'ProdutoController@show');
Route::get('/pedido','PedidoController@index');
Route::get('/produto','ProdutoController@index');
Route::get('/cliente','ClienteController@index');

//inserções
Route::post('/contato/inserir','ContatoController@store');
Route::post('/cliente/inserir','ClienteController@store');
Route::post('/pedido/inserir','PedidoController@store');
Route::post('/produto/inserir','ProdutoController@store');
Route::post('/categoria/inserir','CategoriaController@store');

//exclusões
Route::get('/contato/{id}','ContatoController@destroy'); //precisa ter id para n apagar tudo
Route::get('/cliente/{id}','ClienteController@destroy');
Route::get('/pedido/{id}','PedidoController@destroy');
Route::get('/produto/{id}','ProdutoController@destroy');
Route::get('/categoria/{id}','CategoriaController@destroy');

//edições
Route::get('/categoriaEditar/{id}/editar','CategoriaController@edit');
Route::get('/produtoEditar/{id}/editar','ProdutoController@edit');
Route::get('/pedidoEditar/{id}/editar','PedidoController@edit');
Route::get('/clienteEditar/{id}/editar','ClienteController@edit');
Route::get('/contatoEditar/{id}/editar','ContatoController@edit');

//alterações
Route::post('/contato-alterar/{id}','ContatoController@update');
Route::post('/produto-alterar/{id}','ProdutoController@update');
Route::post('/pedido-alterar/{id}','PedidoController@update');
Route::post('/categoria-alterar/{id}','CategoriaController@update');
Route::post('/cliente-alterar/{id}','ClienteController@update');


