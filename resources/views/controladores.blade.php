@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <div class="container-fluid">
            <table class="table table-light table-hover mt-5">
                <thead class="table-dark">
                  <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>IP</th>
                    <th>Id gateway</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($listacontroladores as $controlador) 
                  <tr onclick="window.location.href='{{ route('controladoresdetail', [ 'id_controlador' =>  $controlador->id ]) }}'">
                  
                    <td>{{$controlador->id}}</td>
                    <td>{{$controlador->type}}</td>
                    <td>{{$controlador->Ip}}</td>
                    <td>{{$controlador->id_gateway}}</td>
                    <td>
                      <button class="btn btn-warning btn-sm" title="Editar">Editar</button>
                      <button class="btn btn-danger btn-sm" title="Excluir">Eliminar</button>
                    </td>
                  

                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        </div>
        <div class="fixed-bottom">
            <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 ml-5 float-end"
             type="submit" onclick="window.location.href='{{ route('addControlador', ['id_user' => Auth::user()->id ]) }}'">+ Adicionar Controlador</button>
        </div>
    </div>
    @endsection