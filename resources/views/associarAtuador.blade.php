@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <h2 class="mt-5">Associar Atuador</h2>
    <form action="{{url('associaratuador')}}" method="post">
      @csrf
      <div class="form-group mt-3">
        <label for="atuador">Lista de atuadores:</label>
        <select id="atuador" class="form-control" name="id_atuador">

          @foreach($lista_atuadores as $atuador)  
                <option value="{{$atuador->id}}">Atuador {{$atuador->id}}</option>
            <!-- Adicione mais opções de sensor conforme necessário -->
          @endforeach
          <!-- Adicione mais opções de sensor conforme necessário -->
        </select>
      </div>

      <div class="form-group mt-3">
        <label for="atuador">Cultura:</label>
        <input type="text" class="form-control" id="cultura" name="id_cultura" value="">
      </div>

    <!--  <div class="form-group mt-3">
        <label for="porta">Porta Ligada:</label>
        <input type="text" class="form-control" id="porta" name="porta">
      </div>
    -->

      <button type="submit" class="btn btn-cultura mt-3">Associar Atuador</button>
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