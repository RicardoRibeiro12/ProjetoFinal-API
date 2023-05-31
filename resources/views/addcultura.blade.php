@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container mt-5 ">
        <h1>Formulário de Culturas</h1>
        <form action="{{url('cultura')}}" method="post">
            @csrf
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}}" class="d-none">

            <div class="form-group row mt-3 no-horizontal-margin">
                <label for="descricao" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da cultura">
                </div>
            </div>
            <div class="form-group row mt-3 no-horizontal-margin">
                <label for="latitude" class="col-sm-2 col-form-label">Latitude:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Digite a latitude">
                </div>
                <label for="longitude" class="col-sm-2 col-form-label">Longitude:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Digite a longitude">
                </div>
            </div>
            <div class="form-group row mt-3 no-horizontal-margin">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-cultura">Adicionar Cultura</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row no-horizontal-margin">
        <div class="col-sm text-center">
            <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                onclick="window.location.href='sensores.html'">Voltar</button>
        </div>
        <div class="col-sm text-center">
        </div>
        <div class="col-sm text-center">
            
        </div>
    </div>
    @endsection