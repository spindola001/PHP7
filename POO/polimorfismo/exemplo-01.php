<?php

abstract class Animal{
    //metodos que serão poliformicos - comportamentos diferentes, com o mesmo nome
    public function falar(){
        return "som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }

}

class Gato extends Animal{
    
    public function falar(){
        return "miau";
    }

}

class Passaro extends Animal{

    public function falar(){
        return "canta";
    }
    public function mover(){
        return "Voa e ".parent::mover(); //usando poliformismo e chamando o metodo estaticamento para concatenar com o metodo poliformico
    }

}

//cada instancia de classe aqui utiliza os mesmo metodos da classe abstrata Animal, porem cada um com seu funcionamento
$pluto = new Cachorro();

echo $pluto->falar()."</br>";
echo $pluto->mover()."</br>";

$garfield = new Gato();

echo $garfield->falar()."</br>";
echo $garfield->mover()."</br>";

$corvo = new Passaro();

echo $corvo->falar()."</br>";
echo $corvo->mover()."</br>";

?>