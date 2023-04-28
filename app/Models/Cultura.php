<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultura extends Model
{
    use HasFactory;

    public function Sensores()
    {
        return $this->belongsToMany(Sensor::class,'sensores_cultura','id_cultura','id_sensor');

    }

    public function Atuadores()
    {
        return $this->belongsToMany(Atuador::class,'atuadores_cultura','id_sensor','id_atuador');

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
