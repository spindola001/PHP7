<?php
//classe de cadastro generica
//nela contem as informações de uma cadastro em geral
class Cadastro{

    private $nome;
    private $email;
    private $senha;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
    
    //quando a classe for instnciada o objeto poderá ser apresentando em formato JSON
    public function __toString(){

        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));

    }
}

?>