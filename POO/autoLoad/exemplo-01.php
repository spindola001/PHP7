<?php
//função para importar classes
function __autoload($nomeClasse){

    require_once("$nomeClasse.php");
}

$carro = new Delrey();

$carro->acelerar(150);

?>