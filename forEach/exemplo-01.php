<?php
//o foreach percorre por cada item de um array ou alguma estrutura base e execute para cada item o bloco de código determinado

$meses = array(
    "Janeiro","Fevereiro","Março",
    "Abril","Maio","Junho",
    "Julho","Agosto","Setembro",
    "Outubro","Novembro","Dezembro"
); //array que servirá de base para o foreach

foreach ($meses as $index => $mes){

    echo "Indice: ".$index."<br/>";
    echo "O mês é: ".$mes."<br/><br/>";

} //obs: o foreach cria uma variáve para armazenar cada item do array separadamente

?>