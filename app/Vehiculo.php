<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public function mantes()
    {
        return $this->hasMany(Mante::class, 'vehi_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function tipovehis()
    {
        return $this->belongsTo(Tipovehi::class, 'id');
    }
}
