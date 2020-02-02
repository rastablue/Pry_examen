<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    public function mantenimientos()
    {
        return $this->hasOne(Mante::class, 'id');
    }
}
