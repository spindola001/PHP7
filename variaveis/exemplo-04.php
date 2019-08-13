<?php
//usando variavei pre-definidas ou superGlobais
//variaveis que estao sempre disponiveis em qualquer escopo

$nome = (int)$_GET["a"]; //recebe informações do usuario por meio de um formulario ou outras interações

//var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>