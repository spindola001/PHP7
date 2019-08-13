<?php
//formando um select do ano de 2019 (atual) até 1920 com FOR

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--){

    echo '<option value="'.$i.'">'.$i.'</option>'; 

}

echo "</select>";

?>