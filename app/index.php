<?php
//QUERY STRING
//var_dump ($_GET);

$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];

$greeting = "Hola $name $surname!";