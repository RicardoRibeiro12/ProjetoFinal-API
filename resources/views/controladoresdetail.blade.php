@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-6">
                    <caption class="text-center">
                        <h2>Sensores</h2>
                    </caption>
                    <table class="table table-light table-hover">

                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>ID Controlador</th>
                                <th>Type</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listasensores as $sensor) 
                            <tr onclick="window.location.href='{{ route('logsSensor', [ 'id_sensor' =>  $sensor->id ]) }}'">
                                <td>{{ $sensor->id}}</td>
                                <td>{{$sensor->id_controlador}}</td>
                                <td>{{$sensor->type}}</td>
                                <td>{{$sensor->descricao}}</td>
                            </tr>
                            @endforeach
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <caption class="text-center">
                        <h2>Atuadores</h2>
                    </caption>
                    <table class="table table-light table-hover">
                        <thead class="thead-dark">
                            <tr >
                                <th>ID</th>
                                <th>ID Controlador</th>
                                <th>Type</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listaatuadores as $atuador)
                            <tr onclick="window.location.href='{{ route('logsAtuador', [ 'id_atuador' =>  $atuador->id ]) }}'">
                                <td>{{$atuador->id}}</td>
                                <td>{{$atuador->id_controlador}}</td>
                                <td>{{$atuador->type}}</td>
                                <td>{{$atuador->descricao}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row no-horizontal-margin mt-3">
            <div class="col-md-6 text-center">
                
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{ route('addsensores', ['id_controlador' => $id_controlador ]) }}'">+Adicionar Sensores</button>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{ route('addatuadores', ['id_controlador' => $id_controlador ]) }}'">+Adicionar Atuador</button>
            </div>
        </div>
    </div>
    @endsection