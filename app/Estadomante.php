<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadomante extends Model
{
    public function estadomant()
    {
        return $this->hasMany('App\Mante');
    }
}
