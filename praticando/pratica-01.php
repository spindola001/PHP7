<?php

$words = array("picles", "Homer", "Barth", "Lucifer", 
"srPotatle", "pi", "hand", "this", "place"
);
$aux = "";

foreach ($words as $index => $word){
    
    //echo $index.$word."<br/>";  
    strlen($word);

}

for ($i = 0; $i < 8; $i++){

    for ($j = $i + 1; $j < 9; $j++){

        if ($words[$i] > $words[$j]){

            $aux = $word[$i];
            $word[$i] = $word[$j];
            $j = $aux;

        }

    }

}

?>