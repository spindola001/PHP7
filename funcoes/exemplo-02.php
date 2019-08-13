<?php
//exemplo do uso do return
//posso usar o retorno do função da forma que eu quiser

function salario(){

    return 1.5 + 1.5;

}

echo "José recebeu 3 salários: ".(salario()*3); //a função retorna um valor pra onde é chamada pode assim fazer o calculo

echo "<br/>";
 
echo "José recebeu 3 salários: ".(salario()/2);

echo "<br/>";

echo "José recebeu 3 salários: ".(salario()*salario());

?>