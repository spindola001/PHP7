<?php
//função para importar classe de outros diretorios - os ifs verificam se o arquivo existe naquele diretorio
function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php")==true){
        require_once($nomeClasse.".php");
    }
    
} 

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    //dito o nome do diretorio, separador de dir e nome da classe (arquivo)
    if(file_exists("abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php")==true){
        require_once("abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php");
    }

});

$carro = new Delrey();

$carro->acelerar(150);

?>