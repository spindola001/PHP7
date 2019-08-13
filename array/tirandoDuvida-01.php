<?php//não entendi
$ar1 = array();
array_push($ar1, 1, 2, 3, 4);

foreach($ar1 as $ar) {
    $ar2 = array();
    array_push($ar2, 5, 6, 7, 8);
    array_push($ar1, $ar2);

    foreach($ar1 as $ar) {
        print_r($ar);
    }
}

?>