@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <div class="container-fluid">
        <div class="row mt-5">
            @foreach ($lista_sensores as $sensor)
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$sensor->id}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> &deg;</h6>
                        <p class="card-text">Last updated: </p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row mt-5">
                @foreach ($lista_atuadores as $atuador)
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{$atuador->id}}</h5>
                            <button class="btn btn-success btn-lg  text-uppercase fw-bold mb-2"
                                type="submit">On</button>
                            <button class="btn btn-danger btn-lg  text-uppercase fw-bold mb-2"
                                type="submit">Off</button>
                            <p class="card-text">Status: status </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Rele</h5>
                            <button class="btn btn-success btn-lg  text-uppercase fw-bold mb-2"
                                type="submit">On</button>
                            <button class="btn btn-danger btn-lg  text-uppercase fw-bold mb-2"
                                type="submit">Off</button>
                            <p class="card-text">Status: status </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='associarSensor.html'">Associar Sensores</button>
            </div>
            <div class="col-sm text-center">
                
            </div>
            <div class="col-sm text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='associarAtuador.html'">Associar Atuador</button>
            </div>
        </div>

    </div>
    @endsection