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

//para preencher o mapa com os dados iniciais
Route::get('/api/v1/dados', 'InicioController@dados');


Route::get('/api/v1/denuncias', 'DenunciasController@index');
Route::post('/api/v1/denuncias', 'DenunciasController@store');

Route::get('/api/v1/municipios', 'MunicipiosController@index');

Route::get('/api/v1/planos', 'PlanosController@index');

Route::get('/api/v1/tipos_denuncias', 'TiposDenunciasController@index');

Route::get('/api/v1/estabelecimento', 'EstabelecimentosController@index');
Route::get('/api/v1/estabelecimento/query', 'EstabelecimentosController@query');

Route::get('/api/v1/users', 'UsersController@index');

Route::get('/', 'InicioController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
