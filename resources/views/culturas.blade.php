<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Referência ao CSS do Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

     <!-- Referência ao arquivo de scripts do Bootstrap -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="{{asset('css/home.css')}}">
 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Minha Nav Bar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" onclick="window.location.href='/culturas'">Culturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="window.location.href='/controladores'">Controladores</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="bg-container"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                @foreach ($listaculturas as $cultura)
                    <div class="col-lg-6 mb-3 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Cultura {{$cultura->id}}</h5>
                                <h6 class="card-subtitle mb-2">Descrição: {{$cultura->descricao}}</h6>
                                <h6 class="card-subtitle mb-2">Localização: {{$cultura->latitude}} , {{$cultura->longitude}}</h6>
                                <div class="text-center">
                                    <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit" onclick="window.location.href='sensores_atuadores/{{$cultura->id}}'">Entrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="fixed-bottom">
                    <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 float-end" type="submit" onclick="window.location.href='addcultura'">+ Adicionar
                        Cultura</button>
                </div>
            </div>
</body>
</html>