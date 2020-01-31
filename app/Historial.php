<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    public function histomante()
    {
        return $this->hasOne('App\Mante');
    }
}
