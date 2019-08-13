<?php
//tem mais recursos do que a função date()
//posso usar passar como parametro ou retorno de função
//preferivel que use essa classe ao inves de funções
//posso usar outros recursos para calcuculos que seriam "complexos", como determinar um periodo
$dt = new DateTime();

//objeto criado a partir da classe DateInterval para determinar um periodo
$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/y H:i:s");

//metodo que adiciona o periodo daterminado à data atual
$dt -> add($periodo);

echo "</br>";

echo $dt -> format("d/m/y H:i:s");

?>