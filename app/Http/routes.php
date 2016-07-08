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
Route::group(['middleware'=> 'web'], function(){
});
  Route::get('/', function () {
      return view('welcome');
  });

  Route::auth();

  Route::get('admin','AdministradorController@showLoginForm');
  Route::post('admin','AdministradorController@login');

  //Route::get('adminprincipal','AdministradorController@authenticated');
  Route::get('adminprincipal', function(){
  return view('administradores/principal');
  });


  Route::get('home', 'HomeController@index');

  Route::get('alumnos_registro', 'PaginasController@getAlumnosRegistro');

  Route::get('pais_registrar', 'PaisController@create');
  Route::post('pais_registrar', 'PaisController@store');



  Route::get('hola', function(){
  return view('otros/provincia/hola');
  });

  // Route::get('/provincias_mostrar/{id}', ['uses' => 'ProvinciaController@show', 'as' => 'provincias.show']);

  Route::resource('provincia',   'ProvinciaController');

  //Padres
  Route::get('padresprincipal', function(){
  return view('padres/home');
  });
