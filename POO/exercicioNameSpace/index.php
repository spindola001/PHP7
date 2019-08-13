<?php

use PF\Pessoas;
use PJ\Pessoas;


$pf = new Pessoas();
$pj = new Pessoas();

echo $pf->setNome("Marcos");
echo $pf->setEmail("marcos.spindola001@gmail.com");
echo $pf->setEndereco("inferno");

?>