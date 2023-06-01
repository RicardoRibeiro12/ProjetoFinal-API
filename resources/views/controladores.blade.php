@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <div class="container-fluid">
            <table class="table table-light table-hover mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Type</th>
                    <th>IP</th>
                    <th>IP Gateway</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location.href='{{ route('controladoresdetail') }}'">
                    <td>1</td>
                    <td>ESP Tomates</td>
                    <td>Type 1</td>
                    <td>192.168.1.1</td>
                    <td>192.168.1.254</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ESP Peras</td>
                    <td>Type 2</td>
                    <td>192.168.2.1</td>
                    <td>192.168.2.254</td>
                  </tr>
                  <!-- Adicione mais linhas conforme necessário -->
                </tbody>
              </table>
        </div>
        </div>
        <div class="fixed-bottom">
            <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 ml-5 float-end"
             type="submit" onclick="window.location.href='{{ route('addControlador') }}'">+ Adicionar Controlador</button>
        </div>
    </div>
    @endsection