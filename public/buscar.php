<?php

require_once "../index.php";

$nomeFilme = $_POST['filme'];

$resultado = $buscador->buscar($nomeFilme);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telaflix | Busque todas a informações de filmes e séries.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #e8e8e8;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .active{
            background-color: #dc3545 !important;
            border-color: #dc3545 !important;
        }
    </style>
</head>

<body>
    <div class="container d-flex flex-column mb-3 text-center">
        <img class="mt-3" src="<?= $resultado['Poster'] ?>" />
        <ul class="list-group mt-3">
            <li class="list-group-item active" aria-current="true"><b>Nome do filme:</b> <?= $resultado['Title'] ?></li>
            <li class="list-group-item"><b>Gênero:</b> <?= $resultado['Genre'] ?></li>
            <li class="list-group-item"><b>Tipo:</b> <?= $resultado['Type'] ?></li>
            <li class="list-group-item"><b>Ano de lançamento:</b> <?= $resultado['Year'] ?></li>
            <li class="list-group-item"><b>Duração:</b> <?= $resultado['Runtime'] ?></li>
            <li class="list-group-item"><b>Diretor:</b> <?= $resultado['Director'] ?></li>
            <li class="list-group-item"><b>Atores:</b> <?= $resultado['Actors'] ?></li>
        </ul>
    </div>

</body>

</html>