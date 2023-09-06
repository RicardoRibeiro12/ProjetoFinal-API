<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\Atuadore;
use App\Models\Cultura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\ObsData;
use App\Models\Action;

class CulturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultura = new Cultura;
        $listaculturas = $cultura::all();

        return view('culturas', ['listaculturas'=> $listaculturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cultura = new Cultura;

        $cultura->descricao= $request->descricao;
        $cultura->latitude= $request->latitude;
        $cultura->longitude = $request->longitude;
        $cultura->id_user = $request->id_user;
        $cultura->save();

        return redirect('culturas');
        
       
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function get_sensores_atuadores(string $id ){
        
    
        $cultura = new Cultura;
        $lastlogssensores= new Collection();
        $sensores = $cultura->get_sensores($id);  

        foreach($sensores as $sensor){

            $lastlog=ObsData::where('id_sensor',$sensor->id)->orderBy('created_at', 'desc')->first();;
            
            

            if($lastlog==null){
                $lastlognew= new ObsData;
                $lastlognew->id_sensor= $sensor->id;
                $lastlognew->valor= "";

                $lastlogssensores->push($lastlognew);
            }else{
                $lastlogssensores->push($lastlog);
            }
        }

        $lastlogsatuadores= new Collection();
        $atuadores= $cultura->get_atuadores($id);

        foreach($atuadores as $atuador){
            
            
            $lastlog=Action::where('atuador_id',$atuador->id_atuador)->orderBy('created_at', 'desc')->first();;
            if($lastlog==null){
                $lastlognew= new Action;
                $lastlognew->atuador_id= $atuador->id;
                $lastlognew->acao= "";

                $lastlogsatuadores->push($lastlognew);
            }else{
                $lastlogsatuadores->push($lastlog);
            }
            //return var_dump($lastlog->acao);

            
        }

       
       return view('sensores', ['lista_sensores'=> $sensores, 'lista_atuadores' =>$atuadores,'logssensores'=> $lastlogssensores, 'logsatuadores'=>$lastlogsatuadores]);

    }

    public function get_sensores_user (string $id ){

        $results = DB::table('sensors')
        ->select('sensors.id')
        ->join('controladores', 'sensors.id_controlador', '=', 'controladores.id')
        ->where('controladores.id_user', $id)
        ->get();
       
        return view('associarSensor', ['lista_sensores'=> $results ]);
    }

    public function get_atuadores_user(string $id){
        $results = DB::table('atuadores')
        ->select('atuadores.id')
        ->join('controladores', 'atuadores.id_controlador', '=', 'controladores.id')
        ->where('controladores.id_user', $id)
        ->get();
       
        return view('associarAtuador', ['lista_atuadores'=> $results ]);
    }

    public function associar_sensor(Request $request){
        $cultura = new Cultura;
        $cultura->addSensor($request->id_sensor,$request->id_cultura);
        return redirect()->route('home');
    }

    public function associar_atuador(Request $request){
        $cultura = new Cultura;
        $cultura->addAtuador($request->id_atuador,$request->id_cultura);
        
        return redirect()->route('home');
    }
}
