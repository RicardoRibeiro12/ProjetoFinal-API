<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- ReferÃªncia ao arquivo de scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
    <div class="bg-container"></div>
    <div class="container">
        <div class="container-fluid">
            <div class="row mt-5">
            @foreach ($lista_sensores as $sensor)
                <div class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{$sensor->id}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> &deg;</h6>
                            <p class="card-text">Last updated: </p>
                        </div>
                    </div>
                </div>
            @endforeach    





                
                
            <div class="row mt-5">
                @foreach ($lista_atuadores as $atuador)
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{$atuador->id}}</h5>
                            <button class="btn btn-success btn-lg  text-uppercase fw-bold mb-2" type="submit">On</button>
                            <button class="btn btn-danger btn-lg  text-uppercase fw-bold mb-2" type="submit">Off</button>
                            <p class="card-text">Status:  status </p>
                        </div>
                    </div>
                    
                </div>
                @endforeach 
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Rele</h5>
                            <button class="btn btn-success btn-lg  text-uppercase fw-bold mb-2" type="submit">On</button>
                            <button class="btn btn-danger btn-lg  text-uppercase fw-bold mb-2" type="submit">Off</button>
                            <p class="card-text">Status:  status </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='../culturas'">Culturas</button>
            </div>
            <div class="col-sm text-center">
            </div>
            <div class="col-sm text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='../regras'">Regras</button>
            </div>
        </div>

    </div>
</body>

</html>