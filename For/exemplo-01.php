<?php

for ($i = 0; $i < 100; $i++){

    if ($i > 50 && $i < 70) continue; //determina um intervalo e pula o mesmo continuando de onde parou
    if ($i === 71) break; //para a contagem quando o valor for identico ao da condição

    echo $i."º picles<br/>";

}

?>