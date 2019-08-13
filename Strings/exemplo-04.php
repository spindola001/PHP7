<?php
//funções que manipulam strings

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); //procura a palavra mãe na string

$texto = substr($frase, 0, $q); //apresenta tudo que vem antes de variavel $q

var_dump($texto);

$texto2 = substr($frase, $q); //apresenta tudo que vem depois da variavel $q, inclusive a variavel $q

var_dump($texto2);

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase)); //apresenta tudo que vem depois da palavra mãe exceto a palavra mãe

echo "<br/>";

var_dump($texto3);

?>