<?php

var_dump($_GET);

$lenght = $_GET['lenght'];
$password = '';
$word = 'abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNORSTUVWXYZ0123456789!#$%&*-+/';
$single_word = str_split($word);
shuffle($single_word);

for ($i = 0; $i < $lenght; $i++) {
    $password .= $single_word[array_rand($single_word)];
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Password generator</title>
</head>

<body>

    <div class="container py-5">
        <form action="" method="GET">
            <span>Lunghezza della parola </span>
            <input type="number" placeholder="indice la lunghezza della parola" name="lenght">
            <button type="submit" method="GET" class="btn btn-primary">Invia</button>
            <button type="button" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
    <div>
        <h1>La tua password: <?php echo $password ?></h1>
    </div>

</body>

</html>