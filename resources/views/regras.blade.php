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
            <tr onclick="window.location.href='{{ route('regradetail') }}'">
              <td>1</td>
              <td>Regra 1</td>
              <td>Descrição da Regra 1</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Regra 2</td>
              <td>Descrição da Regra 2</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Regra 3</td>
              <td>Descrição da Regra 3</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="fixed-bottom">
      <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 ml-5 float-end" type="submit"
        onclick="window.location.href='{{ route('addRegra') }}'">+ Adicionar Regra</button>
    </div>
    @endsection