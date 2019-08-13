<?php
//função anonima
//a variavel $callback evita q o programa esgote o tempo de espera em um processo lento (não sei o tempo que vai demorar), assim, quando o processo terminar o prorama irá avisar ao usuário
function test($callback){

    //Processo lento

    //função chamada depois que o processo lento terminar
    $callback();

}

//a função test recebe como parametro a função anonima  
test(function(){

    echo "Terminou!";

});

?>