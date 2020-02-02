<?php

Route::get('/', function () {
    return view('welcome');

    //Obtener los datos del carro mandando el id del usuario
    //$user = App\User::first();
    //return $user->vehiculos;
    //Obtener los datos del usuario buscando en el campo users_id de la tabla vehiculos
    //$vehi = App\Vehiculo::findOrFail(1);
    //return $vehi->users;

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsuarioController');

Route::resource('vehiculos', 'VehiculoController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('mantenimientos', 'MantenimientoController');
