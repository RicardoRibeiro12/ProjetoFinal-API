<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atuadore extends Model
{
    use HasFactory;


    public function controlador()
    {
        return $this->belongsTo(Controladore::class);
    }

    public function Culturas()
    {
        return $this->belongsToMany(Cultura::class,'atuadores_cultura','id_atuador','id_cultura');

    }

}
