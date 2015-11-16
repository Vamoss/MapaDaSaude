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

Route::get('/dados', 'InicioController@dados');

Route::get('/denuncias', 'DenunciasController@index');
Route::get('/denuncias/create', 'DenunciasController@create');
Route::post('/denuncias', 'DenunciasController@store');

Route::get('/municipios', 'MunicipiosController@index');

Route::get('/planos', 'PlanosController@index');

Route::get('/tipos_denuncias', 'TiposDenunciasController@index');

Route::get('/estabelecimento', 'EstabelecimentosController@index');
Route::get('/estabelecimento/query', 'EstabelecimentosController@query');

Route::get('/users', 'UsersController@index');

Route::get('/', 'InicioController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
