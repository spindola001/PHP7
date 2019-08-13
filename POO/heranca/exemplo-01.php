<?php
//herança
class Documento{

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;

        return $this;
    }

}

//a classe CPF herda tudo que tem em Documento
class CPF extends Documento{

    public function validar():bool{
        
        $numeroCPF =  $this->getNumero();

        //validação do cpf

        return true;
    }

}

$doc = new CPF();

$doc->setNumero("506099008-70"); 

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>