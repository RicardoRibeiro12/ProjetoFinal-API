@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <h2 class="mt-5">Formulário de Adicionar Atuação</h2>
    <form>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="id">ID do Sensor:</label>
            <select class="form-control" id="id" name="id">
                <option value="sensor1">Sensor 1</option>
                <option value="sensor2">Sensor 2</option>
            </select>
        </div>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="descricao">Valor:</label>
            <input type="number" step="0.01" class="form-control" id="valor" name="valor"
                placeholder="Digite o Valor">
        </div>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="condicao">Condição:</label>
            <select class="form-control" id="condicao" name="condicao">
                <option value="maior">Maior</option>
                <option value="menor">Menor</option>
                <option value="igual">Igual</option>
            </select>
        </div>
        <div class="form-group no-horizontal-margin mt-3">
            <button type="submit" class="btn btn-cultura">Enviar</button>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-sm text-center">
        <!--<button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
            onclick="window.location.href='regradetail.html'">Voltar</button>-->
    </div>
    <div class="col-sm text-center">
    </div>
    <div class="col-sm text-center">

    </div>
</div>
@endsection