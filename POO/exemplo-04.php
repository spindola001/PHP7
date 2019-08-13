<?php
//todos os motodos mágicos são iniciados quando um objeto é instanciado e utilizado 
class Endereco{

    private $logradouro;
    private $nro;
    private $cidade;

    //método construtor ou mágico. A partir do momento que eu instanciar um objeto o mesmo é criado já com aqueles atributos
    public function __construct($log, $nro, $cid){

        $this->logradouro = $log;
        $this->nro = $nro;
        $this->cidade = $cid;

    }

    //o metodo destruct é chamado quando um objeto é removido da memória - ao fim da execução ou atraves do unset. Usado para desconexão com o BD ou destruir variaveis
    public function __destruct(){

        var_dump("Destruir!!!");

    }
    //executado quando o o objeto é instanciado. Ele apresenta as informações em string da maneira necessária
    public function __toString(){

        return $this->logradouro.", ".$this->nro.", ".$this->cidade;

    }

}

$meuEndereco = new Endereco("Rua picles", "666", "Inferno");
/*
var_dump($meuEndereco);

unset($meuEndereco);
*/

echo $meuEndereco;

?>