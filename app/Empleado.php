<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function mantenimientos()
    {
        return $this->belongsToMany(Mante::class, 'mantemps', 'empleados_id', 'mantes_id');
    }
}
