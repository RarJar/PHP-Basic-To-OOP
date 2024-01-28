<?php

require("./functions.php");

$name = htmlspecialchars($_GET["name"]);

$students = [
    'Mg Mg','Aung Aung','Zaw Zaw'
];

$works = [
    "title" => 'Sleep',
    "time" => 10,
    "complete" => false
]; 

dd($works);

require('./index.view.php');