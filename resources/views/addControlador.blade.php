@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
  <h1 class="mt-5">Adicionar Controlador</h1>
  <form action="{{url('controlador')}}" method="post">
    @csrf
    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" class="d-none">
    <div class="form-group">
      <label for="type">Type:</label>
      <select id="type" class="form-control" name="type">
        <option value="option1">Esp 8266</option>
        
        <!-- Adicione mais opções de sensor conforme necessário -->
      </select>
    </div>
    <div class="form-group mt-3">
      <label for="Ip" class="form-label">IP:</label>
      <input type="text" class="form-control" id="Ip" name="Ip">
    </div>
    <div class="form-group mt-3">
      <label for="gateway">ID Gateway:</label>
      <select id="gateway" class="form-control" name="id_gateway">
        <option value="1">Gateway 1</option>
      </select>
    </div>
    <div class="form-group mt-3">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao" name="descricao"></textarea>
    </div>
    <button type="submit" class="btn btn-cultura mt-3">Enviar</button>
  </form>
</div>
<div class="row no-horizontal-margin mt-3">
  <div class="col-sm text-center">
    <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
      onclick="window.location.href='{{ route('controladores', ['id_user' => Auth::id()]) }}'">Voltar</button>
  </div>
  <div class="col-sm text-center">
  </div>
  <div class="col-sm text-center">

  </div>
</div>
@endsection