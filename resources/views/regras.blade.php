@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
      <div class="container-fluid">
        <h2 class="mt-5">Tabela com Regras da Cultura</h2>
        <table class="table table-light table-hover mt-5">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Descrição</th>
            </tr>
          </thead>
          <tbody>
          
            @foreach ($listaregras as $regra)
            <tr onclick="window.location.href='{{ route('regradetail', [ 'id_regra' =>  $regra->id ]) }}'">
              <td>{{$regra->id}}</td>
              <td>{{$regra->nome}}</td>
              <td>{{$regra->descricao}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="fixed-bottom">
      <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 ml-5 float-end" type="submit"
        onclick="window.location.href='{{ route('addRegra') }}'">+ Adicionar Regra</button>
    </div>
    @endsection