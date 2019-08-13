<?php
//uma interfaces define regras que eu devo ter nas classe que vao implementa las, elas obrigam a classe usar tudo que eu tenho na interface, do jeito que está
interface veiculo{

    public function acelerar($velociade);
    public function frear();
    public function trocarMarcha($marcha);

}

class Civic implements veiculo{

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

$carro = new Civic();

$carro->trocarMarcha(0);

?>