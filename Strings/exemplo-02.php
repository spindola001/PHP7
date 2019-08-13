<?php
//funções que trabalham com string

$nome = "marcos paulo";
$nome = strtoupper($nome); //todos os caracteres em caixa alta

echo $nome;

$nome = strtolower($nome); //todos em caixa baixa

echo "<br/>";

echo $nome;

echo "<br/>";

echo ucwords($nome); //primeira letra de todas as palavras em caixa alta

echo "<br/>";

echo ucfirst($nome); //primeira letra da primeira palavra de um texto em caixa alta

?>