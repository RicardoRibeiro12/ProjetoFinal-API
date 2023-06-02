@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <div class="container-fluid">
            <h3 class="text-center mt-3">Sensor DHT11 Logs</h3>
            <table class="table table-light table-hover mt-3">
                <thead class="thead-dark">
                  <tr>
                    <th>Valor</th>
                    <th>Unidade de Medida</th>
                    <th>Horas (Created_at)</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($listalogs as $log)
                  <tr>
                    <td>{{$log->valor}}</td>
                    <td>{{$log->unidade_medida}}</td>
                    <td>{{$log->created_at}}</td>
                  </tr>
                  @endforeach
                  <!-- Adicione mais linhas conforme necessário -->
                </tbody>
              </table>
        </div>
        </div>

    </div>
    @endsection