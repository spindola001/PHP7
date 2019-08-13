<?php

class Pessoa{
    //visibilidade dos atributos
    public $nome = "Rarsmus Lerdof"; //o atrbuto pode ser acessado por qualquer classe 
    protected $idade = 48; //o atributo pode ser visualizado por classes que a estendem
    private $senha = "123456";//o atributo só é visualizado pela própria calasse

    

    public function verDados(){

        echo $this->nome."</br>";
        echo $this->idade."</br>";
        echo $this->senha."</br>";

    }

}

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this)."</br>";

        echo $this->nome."</br>";
        echo $this->idade."</br>";
        echo $this->senha."</br>";

    }

}

    $marcos = new Programador();
 
    // echo $marcos->nome."</br>";
    // echo $marcos->idade."</br>";
    // echo $marcos->senha."</br>";

    $marcos->verDados();

?>