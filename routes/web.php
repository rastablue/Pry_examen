<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsuarioController');

Route::resource('vehiculos', 'VehiculoController');

Route::resource('empleados', 'EmpleadoController');
