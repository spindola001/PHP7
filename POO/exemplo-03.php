<?php

class Documentos{

    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $resultado = Documentos::validaCPF($numero); //usa se :: para acessar metodos estaticos, ao contrario do metodos normais que são acessados com ->
        if ($resultado === false){
            throw new Exception("CPF informado não válido. Tente novamente!", 1); //tratamento de erro: apresenta uma mensagem amigavel ao usuario caso o cpf seja invalido
        }else{
            echo "CPF: ".$numero."<br/>";
            echo "Parabéns! Seu CPF é válido!";
        }

        $this->numero = $numero;
    }
    //este é um método static - pode ser acessado dentro ou fora da sua classe sem o auxilio de um objeto
    //este método faz uma validação básica de CPF
    public static function validaCPF($cpf):bool{
        
        //verifica se o número foi informado
        if(empty($cpf)) return false;

        //elimina possíveis mascaras
        $cpf = preg_replace('[0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        //verifica se a quantidade de numeros informados é igual a 11
        if (strlen($cpf) != 11){
            return false;
        }

        //eliminia a possibilidade de sequencias inválidas
        else if ($cpf == '00000000000'||
            $cpf == '11111111111'||
            $cpf == '22222222222'||
            $cpf == '33333333333'||
            $cpf == '44444444444'||
            $cpf == '55555555555'||
            $cpf == '66666666666'||
            $cpf == '77777777777'||
            $cpf == '88888888888'||
            $cpf == '99999999999'){
            return false;
        }else{

            //valida o cpf informado com base nos digitos verificadores
            for ($t = 9; $t < 11; $t++){

                for ($d = 0, $c = 0; $c < $t; $c++){
                    $d += $cpf{$c} * (($t +1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d){
                    return false;
                }

            }

            return true;

        }

    }

}

$cpf = new Documentos();
$cpf->setNumero("50609900870");

?>