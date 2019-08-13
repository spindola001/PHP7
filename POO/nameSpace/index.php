<?php

//requisitando o arquivo de configuração
require_once("config.php");

//use a classe cadastro cujo namespace é Cliente
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Marcos");
$cad->setEmail("marcos.spindola001@gamil.com");
$cad->setSenha("1234");

$cad->registrarVenda();

?>