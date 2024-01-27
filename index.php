<?php

$name = htmlspecialchars($_GET["name"]);

$students = [
    'Mg Mg','Aung Aung','Zaw Zaw'
];

$works = [
    "title" => 'Sleep',
    "time" => 10,
    "complete" => true
]; 

// echo "<pre>";
// var_dump($works);

require('./index.view.php');