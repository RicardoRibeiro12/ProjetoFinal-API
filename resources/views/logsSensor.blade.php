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
                  <tr>
                    <td>20</td>
                    <td>ºC</td>
                    <td>25/05/2023 00:58:28</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>ºC</td>
                    <td>25/05/2023 01:58:28</td>
                  </tr>
                  <!-- Adicione mais linhas conforme necessário -->
                </tbody>
              </table>
        </div>
        </div>

    </div>
    @endsection