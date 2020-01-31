<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function mantes()
    {
        return $this->belongsToMany('App\Mante');
    }
}
