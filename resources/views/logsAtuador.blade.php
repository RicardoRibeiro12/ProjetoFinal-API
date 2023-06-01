@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <div class="container-fluid">
            <h3 class="text-center mt-3">Atuador Rele Logs</h3>
            <table class="table table-light table-hover mt-3">
                <thead class="thead-dark">
                  <tr>
                    <th>Ação</th>
                    <th>Horas (Created_at)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ligou</td>
                    <td>25/05/2023 00:58:28</td>
                  </tr>
                  <tr>
                    <td>Desligou</td>
                    <td>25/05/2023 01:58:28</td>
                  </tr>
                </tbody>
              </table>
        </div>
        </div>

    </div>
@endsection