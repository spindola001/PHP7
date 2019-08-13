<?php

//parametros de uma função - servem de argumentos para a manipulação dos resultados de uma função e de seu funcionamento
function ola($texto, $periodo = "Bom dia!"){

    return "Olá $texto $periodo<br/>";

}

echo ola("Pedro","Boa noite!");
echo ola("","");
echo ola("Lorena");

?>