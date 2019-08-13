<?php

class Pessoa{

    public $nome; //atributo

    //método
    public function falar(){

        return "Meu nome é: ".$this->nome; //sintaxe para acessar um atributo - difere um pouco de JAVAs

    }

}

$marcos = new Pessoa(); //instancia da classe Pessoa - objeto marcos
$marcos->nome = "Marcos Davi"; //o nome do objeto marcos recebe Marcos Davi
echo $marcos->falar(); //chamada do metodo falar() da classe Pessoa

?>