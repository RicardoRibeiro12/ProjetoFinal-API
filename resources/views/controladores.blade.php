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
            <table class="table table-light table-hover mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Type</th>
                    <th>IP</th>
                    <th>IP Gateway</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location.href='controladoresdetail.html'">
                    <td>1</td>
                    <td>ESP Tomates</td>
                    <td>Type 1</td>
                    <td>192.168.1.1</td>
                    <td>192.168.1.254</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ESP Peras</td>
                    <td>Type 2</td>
                    <td>192.168.2.1</td>
                    <td>192.168.2.254</td>
                  </tr>
                  <!-- Adicione mais linhas conforme necessário -->
                </tbody>
              </table>
        </div>
        </div>
        <div class="fixed-bottom">
            <button class="btn btn-lg btn-Addcultura text-uppercase fw-bold mb-5 ml-5 float-end"
             type="submit" onclick="window.location.href='addControlador.html'">+ Adicionar Controlador</button>
        </div>
    </div>
</body>

</html>