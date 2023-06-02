<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\ObsData;
use Illuminate\Http\Request;

class SensorController extends Controller
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
        $sensor = new Sensor;
   

        $sensor->type = $request->type;
        $sensor->id_controlador = $request->id_controlador;
        $sensor->port= $request->port;
        $sensor->descricao= $request->descricao;
        $sensor->save();
        
        
        //sensor->Culturas()->attach($request->culturas);
        
        var_dump('sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensor $sensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensor $sensor)
    {
        //
    }

    public function sensor_logs(string $id){
        $obsdata = new ObsData;

        $listalogs = $obsdata::where('id_sensor',$id)->get();

        return view('logsSensor', ['listalogs'=> $listalogs]);
    }
}
