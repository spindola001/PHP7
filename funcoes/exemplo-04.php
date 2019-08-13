<?php
//função que pode receber N parametros - quantidade essa definida pelo usuario
function ola(){

    $argumentos = func_get_args(); //função que busca os parametro informados pelo usuario
    return $argumentos;

}

var_dump (ola("Bom dia!", 10));

?>