<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomante extends Model
{
    public function tipomante()
    {
        return $this->hasMany('App\Mante');
    }
}
