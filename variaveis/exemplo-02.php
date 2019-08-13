<?php
/*
$anoNascimento = 1990; //correto

$nomeCompleto = "Carlos"; //correto
*/
$nome1 = "Paulo"; //correto

$sobreNome = "Souza";

$nomeCompleto = $nome1." ".$sobreNome; // concatenação

echo $nomeCompleto;

exit; //o programa para a execução aqui

//$1nome = "Luzia"; //errado

//$nome_func = "Lucas" //unico caractere aceito em nome de variavel

//$this //palavra reservada do php - array superGlobal

echo "<br/>";

//unset($nome1);//destruir variavel

//faz um teste para saber se a variável foi declarada para poder usá-la
if (isset($nome1)){

    echo $nome1;

}

?>