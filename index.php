<?php

$name = htmlspecialchars($_GET["name"]);

$students = [
    'Mg Mg','Aung Aung','Zaw Zaw'
];

require('./index.view.php');