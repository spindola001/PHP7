<?php
//while é uma estrutura bastante usada com banco de dados por ser uma estrura que é executada sem um limite definido

$condicao = true;

while ($condicao){

    $numero = rand(1, 10); //função que gera números aleatóriamente

    if ($numero === 3){

        echo "Três!!!";
        $condicao = false;

    }

    echo $numero." " ; 

}

?>