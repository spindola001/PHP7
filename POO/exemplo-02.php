<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    //o parametro passado para o metodo é diferente do atributo modelo. Ele está recebendo o valor do parametro
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    //o metodo get é o unico que retorna o atributo. O metodo set não retorna pq eu estou iinserindo um valor, e não querendo que ele seja retornado
    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            'modelo'=>$this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()
        );
    }

}

$BMW = new Carro();
$BMW->setModelo("M5");
$BMW->setMotor("V8");
$BMW->setAno("2017");

var_dump($BMW->exibir());

?>