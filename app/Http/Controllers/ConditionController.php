<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

        return view ('addCondicao',['regra_id' => $id ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $condition = new Condition;
   

        $condition->id_regra = $request->id_regra;
        $condition->id_sensor = $request->id_sensor;
        $condition->valor= $request->valor;
        switch ($request->condicao) {
            case 'maior':
                $condition->condicao = '>';
                break;
            case 'menor':
                $condiiton->condicao = '<';
                break;
            case 'igual':
                $condition->condicao = '==';      
            default:
                break;
        }
        $condition->save();

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
