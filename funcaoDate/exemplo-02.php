<?php
//o strtotime passa de string para timestamp para que seja usado da forma necessaria, tbm podemos usar expressões
//$ts = strtotime("2001/09/11");
$ts = strtotime("+35 years");

echo date("l/m/Y", $ts);

?>