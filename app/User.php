<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'user_id');
    }

    public function tipovehiculos()
    {
        return $this->hasManyThrough(
            Tipovehi::class, //Parámetro 1 es el modelo objetivo o destino
            Vehiculo::class, //Parámetro 2 es el modelo intermedio o a través del cual pasaremos para lograr obtener datos
            'tipovehis_id', //Clave foránea en la tabla intermedia que en este caso la nombre tipovehis_id en la tabla vehiculos
            'id', //Clave primaria en la tabla origen que sería en este ejemplo id en la tabla Users
            'id'); //Clave primaria en la tabla objetivo que en este ejemplo sería id en la tabla tipo_vehiculos
    }

    protected $fillable = [
        'ced', 'name', 'apepater','apemater', 'direc', 'tlf', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
