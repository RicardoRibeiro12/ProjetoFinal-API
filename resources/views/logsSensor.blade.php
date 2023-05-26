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
            <h3 class="text-center mt-3">Sensor DHT11 Logs</h3>
            <table class="table table-light table-hover mt-3">
                <thead class="thead-dark">
                  <tr>
                    <th>Valor</th>
                    <th>Unidade de Medida</th>
                    <th>Horas (Created_at)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20</td>
                    <td>ºC</td>
                    <td>25/05/2023 00:58:28</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>ºC</td>
                    <td>25/05/2023 01:58:28</td>
                  </tr>
                  <!-- Adicione mais linhas conforme necessário -->
                </tbody>
              </table>
        </div>
        </div>

    </div>
</body>

</html>