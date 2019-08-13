<?php

class Pessoa{
    //visibilidade dos atributos
    public $nome = "Rarsmus Lerdof";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome."</br>";
        echo $this->idade."</br>";
        echo $this->senha."</br>";

    }

}

    $marcos = new Pessoa();
 
    // echo $marcos->nome."</br>";
    // echo $marcos->idade."</br>";
    // echo $marcos->senha."</br>";

    $marcos->verDados();

?>