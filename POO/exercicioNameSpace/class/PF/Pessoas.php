<?php

namespace PF;

class Pessoas extends \Pessoas {

    private $RG;
    private $CPF;
    private $DataNascimento;

    public function getRG()
    {
        return $this->RG;
    }

    public function setRG($RG)
    {
        $this->RG = $RG;

        return $this;
    }

    public function getCPF()
    {
        return $this->CPF;
    }

    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }

    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }

    public function setDataNascimento($DataNascimento)
    {
        $this->DataNascimento = $DataNascimento;

        return $this;
    }

    public function comprar(){
        echo "Você tem dinheiro???";
    }

}

?>