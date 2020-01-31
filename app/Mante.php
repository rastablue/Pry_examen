<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mante extends Model
{
    public function vehiculos()
    {
        return $this->belongsToMany('App\Empleado');
    }
}
