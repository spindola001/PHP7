<?php
//passagem de parametros por referencia 
//se eu não referenciar, por exemplo a variavel $value na linha 9, apenas o valor do foreach vai mudar e não o do array em si, o que seria uma passagem de parametros por valor
$pessoa = array(
    'nome'=>'Marcos',
    'idade'=>18
);

foreach ($pessoa as $key => &$value){

    if (gettype($value) === 'integer') $value += 10; //mudando a idade

    if (gettype($value) === 'string') $value = "João"; //mudando o nome

    echo $key.": ", $value."<br/>";

}

print_r($pessoa);

?>