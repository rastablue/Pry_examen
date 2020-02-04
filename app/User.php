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
            Tipovehi::class, Vehiculo::class, 'tipovehis_id', 'id', 'id','id');
    }

    public function mantenimientos()
    {
        return $this->hasManyThrough(Mante::class, Vehiculo::class, 'user_id', 'vehi_id', 'id', 'id');
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
