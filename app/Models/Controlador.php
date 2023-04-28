<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controlador extends Model
{
    use HasFactory;

    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }

    
    public function atuadores(): HasMany
    {
        return $this->hasMany(Atuador::class,'id_controlador','id');
    }

    
    public function sensores(): HasMany
    {
        return $this->hasMany(Sensor::class,'id_controlador','id');
    }



}
