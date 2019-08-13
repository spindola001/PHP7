<?php
//toda vez que formos trabalhar while/do-while com numeros deve existir uma variavel contador

$total = 150;
$desconto = .9;

do {

    $total *= $desconto;

} while ($total > 100);

echo $total;

?>