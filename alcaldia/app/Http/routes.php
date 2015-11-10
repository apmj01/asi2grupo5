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

Route::get('panel','PageController@panel' );

Route::get('mercado','PageController@mercado' );

Route::get('mercado_solicitudes','PageController@mercado_solicitudes' );

Route::get('registro','PageController@registro' );


Route::resource('usuario','UsuarioController' );


