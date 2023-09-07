<?php

namespace App\Http\Controllers;

use App\Models\Atuadore;
use App\Models\Action;
use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;

class AtuadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        return view ('addatuador',['controlador_id' => $id ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $atuador = new Atuadore;
        
       

        $atuador->type = $request->type;
        $atuador->id_controlador = $request->id_controlador;
        $atuador->port= $request->port;
        $atuador->descricao= $request->descricao;
        $atuador->save();
        
        return redirect()->route('controladoresdetail', [ 'id_controlador' =>  $request->id_controlador ]);
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

    public function storeacoes(Request $request){
        
        var_dump($request->acao);
        $obs = new Action;
        $obs->atuador_id = $request->id_atuador;
        $obs->acao= $request->acao;
        $obs->save();   

    }

    public function acoes_logs(string $id){
        $acoes = new Action;

        $listaacoes = $acoes::where('atuador_id',$id)->get();

        return view('logsAtuador', ['listaacoes'=> $listaacoes]);
    }

    public function atuadoracao(Request $request){
        $atuador = Atuadore::find($request->id_atuador);
        
        MQTT::publish($atuador->id_controlador, $atuador->id.' '.$request->acao);
        
        return redirect()->route('sensores_atuadores', [ 'id' =>  $request->id_cultura]);
        
        
    }

}
