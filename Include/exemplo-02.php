<?php
//chamando um outro arquivo php atraves do include

//include "exemplo-01.php"; //comando que chama outro arquivo de forma menos indicada
require "exemplo-01.php"; //comando que chama outro arquivo de forma mais segura
require_once "exemplo-01.php"; //evita que uma função seja chamada duas vezes

    $resultado = somar(10, 20); //essa função somar() está em ouro arquivo

    echo $resultado;

?>