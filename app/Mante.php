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
        return $this->hasManyThrough(
            Tipovehi::class, //Parámetro 1 es el modelo objetivo o destino
            Vehiculo::class, //Parámetro 2 es el modelo intermedio o a través del cual pasaremos para lograr obtener datos
            'tipovehis_id', //Clave foránea en la tabla intermedia que en este caso la nombre tipovehis_id en la tabla vehiculos
            'id', //Clave primaria en la tabla origen que sería en este ejemplo id en la tabla mantenimiento
            'id'); //Clave primaria en la tabla objetivo que en este ejemplo sería id en la tabla tipo_vehiculos
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
