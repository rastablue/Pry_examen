<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovehi extends Model
{
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'tipovehis_id');
    }
}
