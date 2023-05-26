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
        <h1>Adicionar Controlador</h1>
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
            <div class="form-group">
              <label for="ip" class="form-label">IP:</label>
              <input type="text" class="form-control" id="ip" name="ip">
            </div>
            <div class="form-group">
                <label for="sensor">ID Gateway:</label>
                <select id="gateway" class="form-control" name="gateway">
                    <option value="gateway1">Gateway 1</option>
                    <option value="gateway2">Gateway 2</option>
                    <option value="gateway3">Gateway 3</option>
                  <!-- Adicione mais opções de sensor conforme necessário -->
                </select>
              </div>
              <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
              </div>
            <button type="submit" class="btn btn-cultura">Enviar</button>
          </form>
    </div>
    <div class="row">
        <div class="col-sm text-center">
            <button class="btn btn-lg btn-cultura text-uppercase fw-bold mb-2" type="submit"
                onclick="window.location.href='sensores.html'">Voltar</button>
        </div>
        <div class="col-sm text-center">
        </div>
        <div class="col-sm text-center">
            
        </div>
    </div>
</body>

</html>