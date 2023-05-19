<!DOCTYPE html>
<html>
<head>
    <title>Smartfarm</title>
</head>
<body>
    <button type="button" class="btn btn-primary">Ligar</button>
    <h1>DHT11</h1>
    <ul>
        @foreach ($listobs as $obs)
            <p>{{$obs->id}} &emsp; {{ $obs->valor }} &emsp; {{ $obs->unidade_medida }}</p>
            
        @endforeach
    </ul>
</body>
</html>