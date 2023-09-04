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
        $sensores = DB::table('sensores_cultura')->select('id','cultura_id','sensor_id')->where('cultura_id', $id )->groupBy('sensor_id','cultura_id','id')->get();
        
       
        return $sensores;

    }

    public function get_atuadores(string $id){
        $atuadores = DB::table('atuadores_cultura')->select('id','id_cultura','id_atuador')->where('id_cultura', $id )->groupBy('id_atuador','id_cultura',)->get();

        return $atuadores;
    }

    public function addSensor(string $id_sensor,string $id_cultura){
        DB::table('sensores_cultura')->insert(['sensor_id' => $id_sensor,'cultura_id'=>$id_cultura]);
        return;
    }

    public function addAtuador(string $id_atuador, string $id_cultura){
        DB::table('atuadores_cultura')->insert(['id_atuador' => $id_atuador, 'id_cultura'=>$id_cultura]);
        return;
    }
}
