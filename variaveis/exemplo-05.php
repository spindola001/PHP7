<?php

//escopo de variavel

$nome = "Marcos";

function teste(){

    global $nome; //tornando a variavel nome visivel nessa função
    echo $nome;

}

function teste2(){

    global $nome; //tornando a variavel nome visivel nessa função
    echo $nome." agora no teste dois.";

}

teste2();

?>