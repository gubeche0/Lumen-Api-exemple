<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return view('index');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    
    $router->get('/proprietario', 'ProprietarioController@list');
    $router->get('/proprietario/{id}', 'ProprietarioController@show');
    $router->post('/proprietario', 'ProprietarioController@store');
    $router->put('/proprietario/{id}', 'ProprietarioController@update');
    $router->delete('/proprietario/{id}', 'ProprietarioController@destroy');
    
    
    $router->get('/automoveis', 'VeiculoController@list');
    $router->get('/automovel/{id}', 'VeiculoController@show');
    $router->post('/automovel', 'VeiculoController@store');
    $router->put('/automovel/{id}', 'VeiculoController@update');
    $router->delete('/automovel/{id}', 'VeiculoController@destroy');
});
