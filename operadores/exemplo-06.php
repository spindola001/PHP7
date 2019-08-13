<?php
//null-collection - compara variaveis do tipo null até achar uma com valor definido

$a = null;
$b = null;
$c = 10;

echo $a ?? $b ?? $c;

?>