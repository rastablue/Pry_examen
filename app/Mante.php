<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mante extends Model
{
    public function historiales()
    {
        return $this->hasOne(Historial::class, 'mante_id');
    }

    public function tipovehiculos()
    {
        return $this->hasManyThrough(Tipovehi::class, Vehiculo::class, 'tipovehis_id', 'id');
    }

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'mantemps', 'mantes_id', 'empleados_id');
    }

    public function vehiculos()
    {
        return $this->belongsTo(Vehiculo::class, 'id');
    }

    public function tipomantes()
    {
        return $this->belongsTo(Tipomante::class, 'id');
    }

    public function estadomantes()
    {
        return $this->belongsTo(Estadomante::class, 'id');
    }
}
