<?php

Route::get('/', function () {
    return view('welcome');

    //Obtener los datos del carro mandando el id del usuario
    //$user = App\User::first();
    //return $user->vehiculos;
    //Obtener los datos del usuario buscando en el campo users_id de la tabla vehiculos
    //$vehi = App\Vehiculo::findOrFail(1);
    //return $vehi->users;
    //relacion users 1:N vehiculos 1:N mantenimientos
    //$user = App\User::find(3);
    //return $user->mantenimientos;

    //$as = DB::select("SELECT tipovehis.tipo
    //                FROM tipovehis
    //                INNER JOIN vehiculos
    //                ON vehiculos.tipovehis_id = tipovehis.id
    //                WHERE vehiculos.tipovehis_id = 3");
    //return $as;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsuarioController');

Route::resource('vehiculos', 'VehiculoController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('mantenimientos', 'MantenimientoController');

Route::get('busqueda/empleados', 'EmpleadoController@busqueda')->name('buscaemp');

Route::PUT('busqueda/empleados/pos', 'EmpleadoController@busqueda')->name('busca');
