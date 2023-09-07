@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <div class="container-fluid">
        <div class="row mt-5">
            @if(count($lista_sensores) == 0 && count($lista_atuadores) == 0)
            <div class="row">
                <div class="col-sm text-center">
                    <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{  route('getassociarsensor', ['id_user' => Auth::id()])  }}'">Associar Sensor</button>
                </div>
                <div class="col-sm text-center">
                    
                </div>
                <div class="col-sm text-center">
                    <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                        onclick="window.location.href='{{ route('getassociaratuador', ['id_user' => Auth::id()]) }}'">Associar Atuador</button>
                </div>
            </div>
            @else
            @if(count($lista_sensores) == 0)
            <div class="row">
                <div class="col-sm text-center">
                </div>
                <div class="col-sm text-center">
                    <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{ route('getassociarsensor', ['id_user' => Auth::id()]) }}'">Associar Sensor</button>
                </div>
                <div class="col-sm text-center">
                </div>
            </div>
            @else
            @php
                $iteratorsensores = $lista_sensores->getIterator();
                $iteratorlogs = $logssensores->getIterator();
            @endphp
            @foreach ($iteratorsensores as $sensor) 
                @php
                    $log = $iteratorlogs->current();
                    $iteratorlogs->next();
                @endphp    
                <div class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">ID: {{$sensor->sensor_id}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Ultimo Valor: {{$log->valor}}{{$log->unidade_medida}}</h6>
                            <p class="card-text">Last updated: {{$log->created_at}} </p>
                        </div>
                    </div>
                </div>
                
            @endforeach
            @endif
            <div class="row mt-5">
                @if(count($lista_atuadores) == 0)
                <div class="row">
                    <div class="col-sm text-center">
                    </div>
                    <div class="col-sm text-center">
                        <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                        onclick="window.location.href='{{ route('getassociaratuador', ['id_user' => Auth::id()]) }}'">Associar Atuador</button>
                    </div>
                    <div class="col-sm text-center">
                    </div>
                </div>
                @else
                    @php
                        $iteratoratuadores = $lista_atuadores->getIterator();
                        $iteratoracoes = $logsatuadores->getIterator();
                    @endphp
                @foreach ($iteratoratuadores as $atuador)
                    @php
                        $acao = $iteratoracoes->current();
                        $iteratoracoes->next();
                    @endphp  
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{$atuador->id_atuador}}</h5>
                            <form action="{{url('atuadoracao')}}" method="post">
                                @csrf
                                <input type="hidden" class="form-control" id="atuador" name="id_atuador" readonly value="{{$atuador->id_atuador}}">
                                <input type="hidden" class="form-control" id="on" name="acao" readonly value="ligar">
                                <input type="hidden" class="form-control" id="cultura" name="id_cultura" value="{{$id_cultura}}">
                                <button class="btn btn-success btn-lg  text-uppercase fw-bold mb-2"
                                    type="submit">On</button>
                            </form>    
                            <form action="{{url('atuadoracao')}}" method="post">
                                @csrf
                                <input type="hidden" class="form-control" id="atuador" name="id_atuador" readonly value="{{$atuador->id_atuador}}">
                                <input type="hidden" class="form-control" id="off" name="acao" readonly value="desligar">
                                <input type="hidden" class="form-control" id="cultura" name="id_cultura" value="{{$id_cultura}}">
                                <button class="btn btn-danger btn-lg  text-uppercase fw-bold mb-2"
                                    type="submit">Off</button>
                            </form>
                            <p class="card-text">Ultima Ação: {{$acao->acao}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm text-center">
                @if(count($lista_sensores) == 0)
                @else
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{ route('getassociarsensor', ['id_user' => Auth::id()]) }}'">Associar Sensor</button>
                @endif
            </div>
            <div class="col-sm text-center">

            </div>
            <div class="col-sm text-center">
                @if(count($lista_atuadores) == 0)
                @else
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                        onclick="window.location.href='{{ route('getassociaratuador', ['id_user' => Auth::id()]) }}'">Associar Atuador</button>
                @endif

            </div>
        </div>
        @endif

    </div>
    @endsection