<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    
    public function controlador()
    {
        return $this->belongsTo(Controlador::class);
    }


    public function Culturas()
    {
        return $this->belongsToMany(Cultura::class,'sensores_cultura','id_sensor','id_cultura');

    }


}
