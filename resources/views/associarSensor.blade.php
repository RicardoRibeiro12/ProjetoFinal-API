@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <h2 class="mt-5">Associar Sensor</h2>
    <form action="{{url('associarsensor')}}" method="post">
      @csrf
      <div class="form-group mt-3">
        <label for="sensor">Lista de sensores:</label>
        <select id="sensor" class="form-control" name="id_sensor">
            @foreach($lista_sensores as $sensor)  
                <option value="{{$sensor->id}}">Sensor {{$sensor->id}}</option>
            <!-- Adicione mais opções de sensor conforme necessário -->
            @endforeach
        </select>
      </div>
      <div class="form-group mt-3">
        <label for="atuador">Cultura:</label>
        <input type="text" class="form-control" id="atuador" name="id_cultura" readonly value="1">
      </div>

    <!--  <div class="form-group mt-3">
        <label for="porta">Porta Ligada:</label>
        <input type="text" class="form-control" id="porta" name="porta">
      </div>
    -->

      <button type="submit" class="btn btn-cultura mt-3">Associar Sensor</button>
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