<?php

// var_dump($password);

$lenght = isset($_GET['lenght']) ? $_GET['lenght'] : null;


$password = '';
$word = 'abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNORSTUVWXYZ0123456789!#$%&*-+/';
$single_word = str_split($word);
shuffle($single_word);

var_dump($lenght);



for ($i = 0; $i < $lenght; $i++) {
    if ($lenght > 0 && !is_nan($lenght)) {
        $password .= $single_word[array_rand($single_word)];
        $_SESSION["main_password"] = $password;
        header('Location: ./password.php');
    }
}
