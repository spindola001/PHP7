<?php
//triview ou hierarquia - pode se usar em menus ou outros recurso de um site que trabalham com hierarquia
//funções recursivas - quando uma função chama a si própria
//não entendi o conceito desse array :(
$hierarquia = array(
   array(
       'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: Diretor comercial
            array(
                'nome_cargo'=>'diretor comercial',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'diretor de vendas'
                    )
                )
            ),
            //termino: diretor comercial
            //inicio: diretor financeiro
            array(
                'nome_cargo'=>'diretor financeiro',
                'subordinados'=>array(
                    //inicio: gerente de contas a pagar
                    array(
                        'nome_cargo'=>'gerente de contas a pagar',
                        'subordinados'=>array(
                            //inicio: supervisor de pagamentos
                            array(
                                'nome_cargo'=>'supervisor de pagamentos'
                            )
                        )
                    ),
                        //termino: gerente de compras
                        //inicio: gerente de compras
                        array(
                            'nome_cargo'=>'gerente de compras',
                            'subordinados'=>array(
                                //inicio: supervisor de suprimentos
                                array(
                                    'nome_cargo'=>'supervisor de suprimentos',
                                    'subordinados'=>array(
                                        array(
                                            'nome_cargo'=>'gerenete de fiscalização'
                                        )
                                    )
                                )
                                //termino: supervisor de suprimentos
                            )
                        )
                     //termino: gerente de compras
                )
            )
            //termino: diretor financeiro
        )
   )
);

//função que chama a si própria
//a variavel $cargos é um array passado como parametro para a função
function exibe($cargos){

    
    $html = '<ul style = "background-color: rgba(55,55,0,0.5)">';
        //o foreach é usado por conta do array de arrays
        foreach($cargos as $cargo){

            $html .= "<li>";
                //cada item da lista é um cargo
                $html .= $cargo['nome_cargo'];

                //se a chave subordinados existir e for maior do que 0 a função chama a si mesma passando como parametro a variavel cargo (criada no foreach) com a chave subordinados
                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

                    $html .= exibe($cargo['subordinados']);

                }
            $html .= "</li>";

        }

    $html .= '</ul>';

    return $html;

}

//apresenta a função exibe com o parametro  hierarquia para que ela seja apresentada com a formatação html da função
echo exibe($hierarquia);

?>