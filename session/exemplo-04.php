<?php

session_id('4baj121gke0d19q11ltmdookh8'); //maneira de recuperar uma sessão

require_once("config.php");

session_regenerate_id(); //gera novo id de sessão a cada refresh - util contra ataques

echo session_id();

var_dump($_SESSION);
?>