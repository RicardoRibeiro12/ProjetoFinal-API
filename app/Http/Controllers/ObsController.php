<?php

namespace App\Http\Controllers;

use App\Models\ObsData;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Regra;
use App\Models\Condition;
use App\Models\Raction;
use App\Models\Sensor;
use App\Models\Atuadore;
use App\Models\Controladore;
use App\Mail\Regras;
use PhpMqtt\Client\Facades\MQTT;

class ObsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obs = new ObsData;
        $listobs = $obs::all();

        return view('test', ['listobs'=> $listobs]);

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
        //Registar a observação na bd
        $obs = new ObsData;
        $obs->id_sensor = $request->id_sensor;
        $obs->valor= $request->valor;
        $obs->unidade_medida= $request->unidade_medida;
        //$obs->save();

        // verificar se existem regras com condições que possam ter sido afetadas pela alteração dos valores
        
        // sensor da observação
        $sensor = Sensor::find($request->id_sensor);
        // lista com as condições que utilizam o sensor
        $conditionssensor = Condition::where('id_sensor',$sensor->id)->get();
        
        $idregras=array();

        
        foreach ($conditionssensor as $condition) {
            // ir buscar os ids das regras onde as condições aparecem
            
            $idregras[]=$condition->id_regra;
            var_dump('id_regra');
            var_dump($idregras[0]);
            
            
        }

         foreach ($idregras as $idregra) {
            //ir buscar todas as condições de uma determianda regra
            $conditionsregra = Condition::where('id_regra',$idregra)->get();

            $exitloop = true;
            foreach ($conditionsregra as $condition) {
                //verificar se o ultimo log aciona uma determinada condicao
                $sensor=Sensor::find($condition->id_sensor);
                $lastlog=ObsData::where('id_sensor',$sensor->id)->orderBy('created_at', 'desc')->first();;
                
                var_dump("condicao:");
                var_dump($condition->condicao);
                switch ($condition->condicao) {
                    case '>':
                        var_dump($lastlog->valor);
                        var_dump($condition->valor);
                        if($lastlog->valor > $condition->valor){
                            $exitloop=false;
                        }
                        
                        break;
                    case '<':
                        if($lastlog->valor < $condition->valor){
                            $exitloop=false;
                        }
                        
                        break;
                    case '==':
                        if($lastlog->valor == $condition->valor){
                            $exitloop=false;
                        }
                        
                        break;                 
                    default:
                        # code...
                        break;
                }
                
                 var_dump($exitloop);
                if($exitloop == true){
                    var_dump("não cumpriu regra");
                    break;
                } 
                var_dump('ultimo log');
                
           
            }

            if($exitloop == false){
                //mandar realizar ação associada com a regra
                var_dump("Fazer ação");
                var_dump($idregra);
                $acoes=Raction::where('id_regra',$idregra)->get();

                foreach ($acoes as $acao){
                    $atuador = Atuadore::where('id',$acao->atuador_id)->get();
                    var_dump($atuador[0]->id);
                    $controlador = Controladore::where('id',$atuador[0]->id_controlador);
                    //return var_dump($atuador[0]->id.' '.$acao->acao);

                // en
                    //MQTT::publish($controlador->id, $autador->id.' '.$acao->acao);
                }
                // enviar email para user com a informação da da regra acionada
                //$conditionsregra
                //$idregra
                //$acoes

                /*$data = [
                    'conditionsregra'=>$conditionsregra, 
                    'idregra'=>$idregra, 
                    'acoes'=>$acoes,
                ];*/
              

                Mail::to("2191261@my.ipleiria.pt")->send(new Regras($idregra,$conditionsregra,$acoes));

            }
            
        }
 
        var_dump('id_condicao');
        
        
        var_dump('sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(ObsData $obsData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ObsData $obsData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ObsData $obsData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ObsData $obsData)
    {
        //
    }
}
