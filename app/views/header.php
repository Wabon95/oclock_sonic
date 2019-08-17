<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sonic</title>
</head>

<body>

    <div class="container">
    <header>
    <h1 class="text-center">Ceci est un header</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="<?= $router->generate('home') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $router->generate('home_v2') ?>">Home (Version alternative)</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $router->generate('creators') ?>">Créateurs du jeu</a></li>
            </ul>
        </nav>
    </header>
    <hr>
