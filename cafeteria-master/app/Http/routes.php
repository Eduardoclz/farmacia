<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', ["uses" => 'HomeController@index', 'as' => 'index']);

Route::resource('usuarios', 'UsuarioController');
Route::resource('medicamentos', 'ComidaController');
Route::resource('marca', 'MarcaController');

Route::resource('pedidos','PedidoController');
Route::get('/colapedidos',
    ["uses" => 'PedidoController@colaPedidos', 
    'as' => 'pedidos.cola']);
Route::get('/preparapedido/{idPedido}',
    ["uses" => 'PedidoController@prepararPedido', 
    'as' => 'pedidos.preparar']);

//Rutas de la api
Route::get('/api/medicamentos',
    ["uses" => 'PedidoApiController@getComidas', 
    'as' => 'api.pedidos.getcomidas']);

Route::get('/api/pedidos/{idUsuario}',
    ['uses' => 'PedidoApiController@getPedidosUsuario',
    'as' => 'api.pedidos.getpedidosusuario']);

Route::get('/api/medicina/{idMedicina}',
    ['uses' => 'PedidoApiController@getMedicina',
    'as' => 'api.pedidos.getmedicina']);

    Route::get('/api/marca/{idMarca}',
    ['uses' => 'PedidoApiController@getMarca',
    'as' => 'api.pedidos.getmarca']);


Route::post('/api/login',
    ['uses' => 'LoginApiController@login',
    'as' => 'api.login']);
