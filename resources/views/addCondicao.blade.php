@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <h2 class="mt-5">Formulário de Adicionar Condição</h2>
    <form action="{{url('condition')}}" method="post">
        @csrf
        <div class="form-group mt-3">
        <label for="atuador">Regra Associada:</label>
        <input type="text" class="form-control" id="regra" name="id_regra" readonly value="{{$regra_id}}">
      </div>

        <div class="form-group row no-horizontal-margin mt-3">
            <label for="id">ID do Sensor:</label>
            <input type="number" step="0.01" class="form-control" id="ensor" name="id_sensor" placeholder="Digite o Valor">
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