<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raction;

class RactionController extends Controller
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
        return view ('addAtuacao',['regra_id' => $id ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $raction = new Raction;
       
    
        $raction->id_regra = $request->id_regra;
        $raction->atuador_id = $request->atuador_id;
        $raction->descricao= $request->descricao;
        $raction->acao=$request->acao;

        $raction->save();
    
            return redirect()->route('regradetail', [ 'id_regra' =>  $request->id_regra ]);
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
