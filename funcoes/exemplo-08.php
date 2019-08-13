<?php
//declaração de tipos escalares - definir que todos os parametros que virão serão de um determinado tipo (no caso, inteiro)
function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(2, 2); //soma 2 com 2
echo "<br/>";
echo soma(5, 3); //soma 5 com 3
echo "<br/>";
echo soma(2.5, 2.5); //ele ignora a casa decimal e soma 

?>