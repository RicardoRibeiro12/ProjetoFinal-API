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
    <div class="bg-container"></div>
    <div class="container">
        <h2 class="mt-5">Formulário</h2>
        <form>
          <div class="form-group">
            <label for="sensor">Sensor:</label>
            <select class="form-control" id="sensor">
              <option value="sensor1">Sensor 1</option>
              <option value="sensor2">Sensor 2</option>
              <option value="sensor3">Sensor 3</option>
              <!-- Adicione mais opções de sensor, se necessário -->
            </select>
          </div>
          <div class="form-group">
            <label for="atuador">Atuador:</label>
            <select class="form-control" id="atuador">
              <option value="atuador1">Atuador 1</option>
              <option value="atuador2">Atuador 2</option>
              <option value="atuador3">Atuador 3</option>
              <!-- Adicione mais opções de atuador, se necessário -->
            </select>
          </div>
          <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" class="form-control" id="valor">
          </div>
          <div class="form-group">
            <label for="tempo">Tempo de Atuação:</label>
            <input type="text" class="form-control" id="tempo">
          </div>
          <div class="form-group">
            <label for="maiorMenor">Maior ou Menor:</label>
            <select class="form-control" id="maiorMenor">
              <option value="maior">Maior</option>
              <option value="menor">Menor</option>
            </select>
          </div>
          <button type="submit" class="btn btn-cultura">Enviar</button>
        </form>
    </div>
</body>

</html>