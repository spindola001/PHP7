<?php

$pessoas = array(); //criei um array

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>20
)); //criei outro array e empurrei para dentro do array pessoas

array_push($pessoas, array(
    'nome'=>'Marcos',
    'idade'=>18
));

echo json_encode($pessoas); //transformei esse array em JSON
?>