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

Route::get('mercado','PageController@mercado' );

Route::get('mercado_solicitudes','PageController@mercado_solicitudes' );

Route::get('registro','PageController@registro' );

Route::get('actualizar','PageController@actualizar');

Route::get('buscar_usuario','PageController@buscar_usuario' );


Route::resource('usuario','UsuarioController' );

Route::get('desechos','PageController@desechos' );

Route::get('desechos_solicitudes','PageController@desechos_solicitudes' );

Route::get('resolucion_solicitudes','PageController@resolucion_solicitudes' );

Route::get('asignacion_solicitudes','PageController@asignacion_solicitudes' );
