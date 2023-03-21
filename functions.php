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
