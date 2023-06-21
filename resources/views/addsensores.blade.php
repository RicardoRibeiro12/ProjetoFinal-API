@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <h2 class="mt-5">Adicionar Sensor</h2>
    <form action="{{url('sensor')}}" method="post">
      @csrf
      <div class="form-group mt-3">
        <label for="sensor">Tipo de Sensor:</label>
        <select id="sensor" class="form-control" name="type">
          <option value="DHT11">DHT11</option>
          <option value="LDR">LDR</option>
          <option value="Sensor Nivel">Sensor nivel</option>
          <!-- Adicione mais opções de sensor conforme necessário -->
        </select>
      </div>

      <div class="form-group mt-3">
        <label for="atuador">Controlador Associado:</label>
        <input type="text" class="form-control" id="atuador" name="id_controlador" readonly value="{{$controlador_id}}">
      </div>

    <!--  <div class="form-group mt-3">
        <label for="porta">Porta Ligada:</label>
        <input type="text" class="form-control" id="porta" name="porta">
      </div>
    -->
      <div class="form-group mt-3">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao"></textarea>
      </div>

      <button type="submit" class="btn btn-cultura mt-3">Adicionar Sensor</button>
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