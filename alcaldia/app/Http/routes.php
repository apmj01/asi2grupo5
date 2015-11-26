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

/*
Route::get('/', function () {
    return view('login');
});

*/


Route::get('/','PageController@index' );

Route::resource('panel','PageController@panel' );

// Modulo de Mercado

Route::get('mercado','PageController@mercado' );

Route::get('mercado_solicitudes','PageController@mercado_solicitudes' );

// Modulo de Cementerio

Route::get('cementerio','PageController@cementerio' );

// Modulo de Desechos Solidos

Route::get('desechos_solidos','PageController@desechos_solidos' );

// Modulo de Estado Familiar

Route::get('estado_familiar','PageController@estado_familiar' );


Route::get('registro','PageController@registro' );

Route::get('actualizar','PageController@actualizar');

Route::get('buscar_usuario','PageController@buscar_usuario' );

Route::resource('log','LogController' );

Route::resource('logout','LogController@logout');

Route::resource('usuario','UsuarioController' );

Route::resource('desechos','DesechosController' );








