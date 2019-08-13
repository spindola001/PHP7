<?php
//passagem de parametro por valor
//o endereço da variavel $a é passado como parametro para a fução que troca o valor da propria variavel, sendo que de 10 ela agora sera 60
$a = 10;

function trocarValor(&$a){

    $a += 50;

    return $a;

}

echo trocarValor($a);

echo "<br/>";

echo trocarValor($a);

echo "<br/>";

echo $a;

?>