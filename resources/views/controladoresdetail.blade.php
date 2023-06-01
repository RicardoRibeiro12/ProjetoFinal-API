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
                            <tr onclick="window.location.href='{{ route('logsSensor') }}'">
                                <td>1</td>
                                <td>Type 1</td>
                                <td>DHT11</td>
                                <td>Temperatura Estufa 1</td>
                            </tr>
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
                            <tr onclick="window.location.href='{{ route('logsAtuador') }}'">
                                <td>2</td>
                                <td>Type 2</td>
                                <td>Rele</td>
                                <td>Acender Luz</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row no-horizontal-margin mt-3">
            <div class="col-md-6 text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{ route('addsensores') }}'">+Adicionar Sensores</button>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='{{ route('addatuadores') }}'">+Adicionar Atuador</button>
            </div>
        </div>
    </div>
    @endsection