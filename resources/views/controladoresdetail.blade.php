<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-6">
                    <caption class="text-center">
                        <h2>Sensores</h2>
                    </caption>
                    <table class="table table-light table-hover">

                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>ID Controlador</th>
                                <th>Type</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location.href='logsSensor.html'">
                                <td>1</td>
                                <td>Type 1</td>
                                <td>DHT11</td>
                                <td>Temperatura Estufa 1</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <caption class="text-center">
                        <h2>Atuadores</h2>
                    </caption>
                    <table class="table table-light table-hover">
                        <thead class="thead-dark">
                            <tr >
                                <th>ID</th>
                                <th>ID Controlador</th>
                                <th>Type</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location.href='logsAtuador.html'">
                                <td>2</td>
                                <td>Type 2</td>
                                <td>Rele</td>
                                <td>Acender Luz</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='addsensores.html'">+Adicionar Sensores</button>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                    onclick="window.location.href='addatuador.html'">+Adicionar Atuador</button>
            </div>
        </div>
    </div>


</body>

</html>