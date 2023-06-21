<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regra;
use App\Models\Condition;
use App\Models\Raction;

class RegraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regra = new Regra;
        $listaregras = $regra::all();

        return view('regras', ['listaregras'=> $listaregras]);
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
        
        $regra = new Regra;


        $regra->nome = $request->nome;
        $regra->descricao= $request->descricao;
        $regra->save();


        return redirect()->route('regras');;
    
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

    public function condicoes_acoes(string $id)
    {
        $condicao = new Condition;
        $acao= new Raction;

        

        $listacondiocoes = $condicao::where('id_regra',$id)->get();
        $listaacoes= $acao::where('id_regra',$id)->get();

        
        
        return view('regradetail', ['listacondicoes'=> $listacondiocoes,'listaacoes'=> $listaacoes ,'id_regra' => $id]);
        
    }

}
