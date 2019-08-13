<?php

namespace PJ;

class Pessoas extends \Pessoas {

    private $CNPJ;
    private $DataAbertura;
 
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;

        return $this;
    }

    public function getDataAbertura()
    {
        return $this->DataAbertura;
    }

    public function setDataAbertura($DataAbertura)
    {
        $this->DataAbertura = $DataAbertura;

        return $this;
    }

    public function tratarNegocios(){
        echo "Está confirmado!";
    }

}

?>