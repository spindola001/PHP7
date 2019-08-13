<?php
//declaração de tipos escalares - definir que todos os parametros que virão serão de um determinado tipo (no caso, inteiro)

//é possivel dizer o tipo de dado que deve ser retornado
function soma(int ...$valores):string{

    return array_sum($valores); //array_sum(); função que faz a soma do variavel com ela mesma

}

echo var_dump(soma(2, 2)); //soma 2 com 2
echo "<br/>";
echo soma(5, 3); //soma 5 com 3
echo "<br/>";
echo soma(2.5, 2.5); //ele ignora a casa decimal e soma 

?>