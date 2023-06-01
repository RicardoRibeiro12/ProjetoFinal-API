@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <h2 class="mt-5">Adicionar Atuador</h2>
    <form>
      <div class="form-group  mt-3">
        <label for="sensor">Tipo de Atuador:</label>
        <select id="sensor" class="form-control" name="sensor">
          <option value="sensor1">Atuador 1</option>
          <option value="sensor2">Atuador 2</option>
          <option value="sensor3">Atuador 3</option>
          <!-- Adicione mais opções de sensor conforme necessário -->
        </select>
      </div>

      <div class="form-group mt-3">
        <label for="atuador">Controlador Associado:</label>
        <input type="text" class="form-control" id="atuador" name="atuador" readonly value="Controlador 1">
      </div>

      <div class="form-group mt-3">
        <label for="porta">Porta Ligada:</label>
        <input type="text" class="form-control" id="porta" name="porta">
      </div>

      <div class="form-group mt-3">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao"></textarea>
      </div>

      <button type="submit" class="btn btn-cultura mt-3">Adicionar Atuador</button>
    </form>
  </div>
    <div class="row no-horizontal-margin mt-3">
        <div class="col-sm text-center">
            <!--<button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                onclick="window.location.href='controladoresdetail.html'">Voltar</button>-->
        </div>
        <div class="col-sm text-center">
        </div>
        <div class="col-sm text-center">
            
        </div>
    </div>
    @endsection