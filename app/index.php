<?php
//QUERY STRING
//var_dump ($_GET);

function greet(){
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    $greeting = "Hola $name $surname!";
}

$greeting = greet();