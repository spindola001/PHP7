<?php

//basicamente é o nome do diretorio que esse arquivo está locado
namespace Cliente;

//declaro que a clase cadastro do namesapce cliente herda da classe cadastro do diretorio raiz
class Cadastro extends \Cadastro {

    public function registrarVenda(){

        echo "Foi registrada uma venda para o cliente ". $this->getNome();

    }

}

?>