<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telaflix 2 | Busque todas a informações de filmes e séries.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    html,
    body {
      height: 100%;
      background-color: #e8e8e8;
    }

    .container {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .fa-television {
      color: white;
    }
  </style>
</head>

<body>
  <div class="container d-flex flex-column mb-3 text-center">
    <img src="img/tv.png" height="200px" alt="logo Telaflix">
    <h1 class="my-1">TELAFLIX 2</h1>
    <form method="POST" action="buscar.php" class="d-flex flex-column mb-3">
      <label for="filme" class="form-label my-2">Insira o nome em <b>INGLÊS</b> do filme ou da série:</label>
      <input type="text" class="form-control-lg" id="filme" name="filme" placeholder="Ex: Top Gun" required>
      <button type="submit" class="btn btn-danger my-2 w-100">Buscar</button>
    </form>
  </div>
</body>

</html>