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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('home', 'HomeController@index');

Route::get('alumnos_registro', 'PaginasController@getAlumnosRegistro');

Route::get('pais_registrar', 'PaisController@create');
Route::post('pais_registrar', 'PaisController@store');

//  Route::get('	provincia_registrar', 	'ProvinciaController@create');
// Route::post('provincia_registrar', 'ProvinciaController@store');

// Route::get('provincias_mostrar',   'ProvinciaController@index');

// Route::get('provincias_editar/{$id}', 'ProvinciaController@edit');

// Route::put('provincias_update/{$id}',   'ProvinciaController@update');

// Route::get('provincias_mostraruna/{$id}',   'ProvinciaController@show');

// Route::get('/provincias_mostrar/{id}', ['uses' => 'ProvinciaController@show', 'as' => 'provincias.show']);

Route::resource('provincia',   'ProvinciaController');