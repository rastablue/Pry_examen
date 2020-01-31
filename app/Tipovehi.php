<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovehi extends Model
{
    public function tipov()
    {
        return $this->hasMany('App\Vehiculo');
    }
}
