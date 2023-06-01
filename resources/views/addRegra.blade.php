@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
    <div class="container">
        <h2 class="mt-5">Formulário de Regra</h1>
        <form>
            <div class="form-group row no-horizontal-margin mt-3">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" placeholder="Digite o Nome da Regra">
                </div>
            </div>
            <div class="form-group row no-horizontal-margin mt-3">
                <label for="descricao" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição da Regra">
                </div>
            </div>
            <div class="form-group row no-horizontal-margin mt-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-cultura">Adicionar Regra</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row no-horizontal-margin">
        <div class="col-sm text-center">
            <!--<button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                onclick="window.location.href='regras.html'">Voltar</button>-->
        </div>
        <div class="col-sm text-center">
        </div>
        <div class="col-sm text-center">
            
        </div>
    </div>
@endsection