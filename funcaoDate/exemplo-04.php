<?php
//tem mais recursos do que a função date()
//posso usar passar como parametro ou retorno de função
//preferivel que use essa classe ao inves de funções
$dt = new DateTime();

echo $dt -> format("d/m/y H:i:s");

?>       