<?php
//outras funcoes de sessao

require_once("config.php");

echo session_save_path(); //responsavel por guardar informacoes na na pasta tmp

echo "<br/>";

var_dump(session_status()); //mostrar o status de sessao

echo "<br/>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "se as sessões estiverem desabilitadas.";
    break;
    case PHP_SESSION_NONE:
        echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
    break;
    case PHP_SESSION_ACTIVE:
        echo "se as sessões estiverem habilitadas, e uma existir.";
    break;

}

?>