<?php
//configuração do autoload - ou importações de classes
//a função anonima passada como parametro para a função spl_autoload_register recebe como parametro o nome da classe
spl_autoload_register(function($nameClass){

    var_dump($nameClass);

    //uma variavel para armazaenar o nome do diretorio em que essa classe se encontra
    $dirClass = "class";
    //variavel que guarda o caminho do arquivo (classe)
    $fileName = $dirClass. DIRECTORY_SEPARATOR .$nameClass.".php";

    //condição para fazer a requisição apenas se o arquivo existir
    if(file_exists($fileName)){
        require_once($fileName);
    }

})

?>