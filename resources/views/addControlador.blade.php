@extends('layouts.app')

@section('content')
    <div class="bg-container"></div>
    <div class="container">
        <h1 class="mt-5">Adicionar Controlador</h1>
        <form>
            <div class="form-group">
                <label for="sensor">Type:</label>
                <select id="type" class="form-control" name="type">
                    <option value="option1">Opção 1</option>
                <option value="option2">Opção 2</option>
                <option value="option3">Opção 3</option>
                  <!-- Adicione mais opções de sensor conforme necessário -->
                </select>
              </div>
            <div class="form-group mt-3">
              <label for="ip" class="form-label">IP:</label>
              <input type="text" class="form-control" id="ip" name="ip">
            </div>
            <div class="form-group mt-3">
                <label for="sensor">ID Gateway:</label>
                <select id="gateway" class="form-control" name="gateway">
                    <option value="gateway1">Gateway 1</option>
                    <option value="gateway2">Gateway 2</option>
                    <option value="gateway3">Gateway 3</option>
                  <!-- Adicione mais opções de sensor conforme necessário -->
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
                onclick="window.location.href='{{ route('controladores') }}'">Voltar</button>
        </div>
        <div class="col-sm text-center">
        </div>
        <div class="col-sm text-center">
            
        </div>
    </div>
    @endsection