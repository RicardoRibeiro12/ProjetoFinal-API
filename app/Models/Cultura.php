<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cultura extends Model
{
    use HasFactory;

    public function Sensores()
    {
        return $this->belongsToMany(Sensor::class,'sensores_cultura','id_cultura','id_sensor');

    }

    public function Atuadores()
    {
        return $this->belongsToMany(Atuadore::class,'atuadores_cultura','id_sensor','id_atuador');

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function get_sensores(string $id){
        $sensores = DB::table('sensores_cultura')->where('cultura_id', $id )->get();

        return $sensores;

    }

    public function get_atuadores(string $id){
        $atuadores = DB::table('atuadores_cultura')->where('id_cultura', $id )->get();

        return $atuadores;
    }



}
