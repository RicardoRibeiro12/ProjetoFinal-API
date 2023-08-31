<!DOCTYPE html>
<html>
<head>
    <title>Smartfarm</title>
</head>
<body>
    <button type="button" class="btn btn-primary">Ligar</button>
    <h1>Regra: {{ $idregra }} foi verificada</h1>
    <h1>Condições:</h1>
    <ul>
        @foreach ($conditionsregra as $condition)
            <p>Sensor:{{$condition->id_sensor}} &emsp; Valor:{{ $condition->valor }} &emsp; Condição:{{ $condition->condicao}}</p>
            
        @endforeach
    </ul>
    <h1>Ações:</h1>
    <ul>
        @foreach ($acoes as $acao)
            <p>Atuador:{{$acao->atuador_id}} &emsp; Ação:{{ $acao->acao }}</p>
            
        @endforeach
    </ul>

</body>
</html>