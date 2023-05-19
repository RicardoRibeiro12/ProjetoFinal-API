<?php

namespace App\Http\Controllers;

use App\Models\ObsData;
use Illuminate\Http\Request;

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
        $obs = new ObsData;
        $obs->id_sensor = $request->id_sensor;
        $obs->valor= $request->valor;
        $obs->unidade_medida= $request->unidade_medida;
        $obs->save();
        
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
