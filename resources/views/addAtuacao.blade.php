@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <h2 class="mt-5">Formulário de Adicionar Atuação</h2>
    <form>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="id">ID do Atuador:</label>
            <select class="form-control" id="id" name="id">
                <option value="atuador1">Atuador 1</option>
                <option value="atuador2">Atuador 2</option>
            </select>
        </div>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao"
                placeholder="Digite a descrição">
        </div>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="acao">Ação:</label>
            <select class="form-control" id="acao" name="acao">
                <option value="ligar">Ligar</option>
                <option value="desligar">Desligar</option>
            </select>
        </div>
        <div class="form-group row no-horizontal-margin mt-3">
            <label for="tempo">Tempo:</label>
            <input type="text" class="form-control" id="tempo" name="tempo" placeholder="Digite o tempo">
        </div>
        <div class="form-group  no-horizontal-margin mt-3">
            <button type="submit" class="btn btn-cultura">Enviar</button>
        </div>
    </form>
</div>
<div class="row  no-horizontal-margin mt-3">
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