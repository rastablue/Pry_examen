<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomante extends Model
{
    public function mantenimientos()
    {
        return $this->hasMany(Mante::class, 'tipomantes_id');
    }

}
