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

Route::get('/api/v1/dados', 'InicioController@dados');

Route::get('/api/v1/denuncias', 'DenunciasController@index');
Route::post('/api/v1/denuncias', 'DenunciasController@store');

Route::get('/api/v1/municipios', 'MunicipiosController@index');
Route::get('/api/v1/municipios/query', 'MunicipiosController@query');

Route::get('/api/v1/planos', 'PlanosController@index');

Route::get('/api/v1/tipos_denuncias', 'TiposDenunciasController@index');

Route::get('/api/v1/estabelecimento', 'EstabelecimentosController@index');
Route::get('/api/v1/estabelecimento/query', 'EstabelecimentosController@query');

Route::get('/api/v1/users', 'UsersController@index');

Route::get('/', 'InicioController@index');
Route::get('/home', 'InicioController@home');
Route::get('/denuncie', 'InicioController@complain');
