<?php

// var_dump($password);

$lenght = $_GET['lenght'];
$password = '';
$word = 'abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNORSTUVWXYZ0123456789!#$%&*-+/';
$single_word = str_split($word);
shuffle($single_word);

var_dump($lenght);



for ($i = 0; $i < $lenght; $i++) {
    $password .= $single_word[array_rand($single_word)];
    $_SESSION["main_password"] = $password;
    header('Location: ./password.php');
}
