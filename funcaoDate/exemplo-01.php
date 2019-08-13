<?php

//apresentando a data e hora. A caixa do texto influencia na apresentação dos dados
//unixtimestamp é o marco 0 do sistema de calendario usado pelo Unix - inicio: 01/01/1970
echo date("d/m/Y H:i:s", 1565013824);

echo "<br/>";

//informa o timstamp - quantidade de segundos, do marco 0 até a data atual
echo time();

?>