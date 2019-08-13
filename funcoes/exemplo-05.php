<?php
//passagem de parametro por valor
//o valor da variavel $a é passado como parametro para a fução que troca o valor
$a = 10;

function trocarValor($a){

    $a += 50;

    return $a;

}

echo trocarValor($a);

echo "<br/>";

echo trocarValor($a);

echo "<br/>";

echo $a;

?>