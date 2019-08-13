<?php

require_once("config.php");

//session_unset(); //deleta todas as variáveis de sessao existentes
//unset($_SESSION['nome']); //deleta uma variavel de sessao especifica
//session_destroy(); //deleta as variaveis de sessão e o usuario

echo $_SESSION['nome'];

?>