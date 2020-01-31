<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public function mante()
    {
        return $this->hasMany('App\Mante');
    }
}
