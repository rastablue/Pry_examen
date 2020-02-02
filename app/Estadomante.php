<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadomante extends Model
{
    public function mantenimientos()
    {
        return $this->hasMany(Mante::class, 'estmante_id');
    }
}
