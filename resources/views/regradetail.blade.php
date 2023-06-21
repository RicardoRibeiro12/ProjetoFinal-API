@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-6">
                <caption class="text-center">
                    <h2>Condições</h2>
                </caption>
                <table class="table table-light table-hover">

                    <thead class="thead-dark">
                       
                        <tr>
                            <th>ID</th>
                            <th>ID Sensor</th>
                            <th>Valor</th>
                            <th>Condição</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                        @foreach ($listacondicoes as $condiocao) 
                        <tr>
                            <td>{{$condiocao->id}}</td>
                            <td>{{$condiocao->id_sensor}}</td>
                            <td>{{$condiocao->valor}}</td>
                            <td>{{$condiocao->condicao}}</td>
                        </tr>
                        @endforeach
                    
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <caption class="text-center">
                    <h2>Atuações</h2>
                </caption>
                <table class="table table-light table-hover">
                    <thead class="thead-dark">
                        <tr >
                            <th>ID</th>
                            <th>ID Atuador</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                            <th>Tempo</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listaacoes as $acao) 
                        <tr>
                            <td>{{$acao->id}}</td>
                            <td>{{$acao->atuador_id}}</td>
                            <td>{{$acao->descricao}} </td>
                            <td>{{$acao->acao}}</td>
                        
                        </tr>
                    @endforeach
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                onclick="window.location.href='{{ route('addCondicao', ['id_regra' => $id_regra]) }}'">+Adicionar Condição</button> 
        </div>
        <div class="col-md-6 text-center">
            <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                onclick="window.location.href='{{ route('addAtuacao', ['id_regra' => $id_regra]) }}'">+Adicionar Atuação</button>
        </div>
    </div>
</div>
@endsection