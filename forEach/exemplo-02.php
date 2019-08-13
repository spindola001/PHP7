<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php
//esse exemplo pega os valore passado pro formulário pelo usuário

if (isset($_GET)){
    foreach ($_GET as $Key => $value){

        echo "Nome do campo: ". $Key. "<br/>";
        echo "Valor do campo: ". $value;

        echo "<hr>";

    }
}

?>