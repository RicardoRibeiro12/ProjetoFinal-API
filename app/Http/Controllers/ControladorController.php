<?php

namespace App\Http\Controllers;

use App\Models\Controladore;
use App\Models\Sensor;
use App\Models\Atuadore;
use Illuminate\Http\Request;

class ControladorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $controlador = new Controladore;
        $listacontroladores = $controlador::where('id_user',$id)->get();

        return view('controladores', ['listacontroladores'=> $listacontroladores]);
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
        $controlador = new Controladore;

        $controlador->type= $request->type;
        $controlador->Ip= $request->Ip;
        $controlador->id_user = $request->id_user;
        $controlador->id_gateway = $request->id_gateway;

        $controlador->save();

        return redirect()->route('controladores',['id_user' => $request->id_user]);
        
       
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

    // return the lists of sensores and atuadores from a specific controlador 
    public function sensores_atuadores(string $id){
            $sensor = new Sensor;
            $atuador = new Atuadore;

        


            $listasensores = $sensor::where('id_controlador',$id)->get();
            $listaatuadores = $atuador::where('id_controlador',$id)->get();

            
            
            return view('controladoresdetail', ['listasensores'=> $listasensores,'listaatuadores'=> $listaatuadores, 'id_controlador'=>$id]);

    }
}
