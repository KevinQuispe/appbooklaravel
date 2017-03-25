<?php

// Route::group(['middleware' => 'web'], function() {
//     Route::auth();
//     Route::get('/', function() {
// 	return view('auth.login');
//     });
// });
// Route::controllers([
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);


  Route::get('/', [function(){
    // Route::auth();
     return view('auth.login');
  }]);
// Route::get('auth/login');

Route::resource('book','BookController');
Route::resource('usuario','UsuarioController');
Route::resource('sesion','SesionController');
Route::resource('sesion','SesionController@index');
Route::get('cerrar_sesion','SesionController@cerrar_sesion');
