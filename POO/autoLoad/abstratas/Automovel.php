<?php

interface veiculo{

    public function acelerar($velociade);
    public function frear();
    public function trocarMarcha($marcha);

}
//uma classe abstrata tem os metodos e oq eles vão fazer, mas ela não pode ser instanciada diretamente, deve se criar outra classe que herde a classe abstrata para poder instanciar. O resto funciona como a interface
abstract class Automovel implements veiculo{

    public function acelerar ($velocidade){

        echo "Acelerando: ".$velocidade."KM/h";

    }
    public function frear(){

        echo "Freando!!!";

    }
    public function trocarMarcha($marcha){

        for ($i=6; $marcha<$i; $marcha++){
            echo "Marcha: ".($marcha+1)."<br/>";
        }

        if ($marcha>$i){
            echo "Seu carro vai quebrar!";
        }

    }

}

?>