<?php

namespace App\Http\Controllers;

use App\Models\Atuadore;
use Illuminate\Http\Request;

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
    public function create()
    {
        //
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
        
        
        //sensor->Culturas()->attach($request->culturas);
        
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
}
