<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\Atuadore;
use App\Models\Cultura;
use Illuminate\Http\Request;

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
        
        var_dump('sucesso');
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
        
       // var_dump($id);
        $cultura = new Cultura;

        $sensores = $cultura->get_sensores($id);  
        //$sensores = array();

      /*  foreach($sensoresid as $id){
                
                $sensor= Sensor::findOrFail($id);

                $sensores[] = $sensor;
                
        }*/
        
        //var_dump($sensores);    

        $atuadores= $cultura->get_atuadores($id);
        //$atuadores= array();

        /*foreach($atuadoresid as $id){
                
            $atuador= Atuadore::findOrFail($id);

            $atuadores[]=$atuador;
            
            }
    */
       
       return view('sensores', ['lista_sensores'=> $sensores, 'lista_atuadores' =>$atuadores]);

    }
}
