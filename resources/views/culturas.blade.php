@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="row no-horizontal-margin mt-5 justify-content-center">
    @foreach ($listaculturas as $cultura)
    <div class="col-lg-6 mb-3 ">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Cultura {{$cultura->id}}</h5>
                <h6 class="card-subtitle mb-2">Descrição: {{$cultura->descricao}}</h6>
                <h6 class="card-subtitle mb-2">Localização: {{$cultura->latitude}} , {{$cultura->longitude}}</h6>
                <div class="text-center">
                    <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                        onclick="window.location.href='sensores_atuadores/{{$cultura->id}}'">Entrar</button>

                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="fixed-bottom">
        <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 float-end" type="submit"
            onclick="window.location.href='addcultura'">+ Adicionar
            Cultura</button>
    </div>
</div>
@endsection
