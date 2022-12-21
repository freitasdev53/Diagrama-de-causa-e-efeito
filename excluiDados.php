<?php
require"classes.php";

$acao = $_POST["acao"];
$IDOcorrencia = $_SESSION["IDOco"];
switch($acao){
    case "Coluna":
        $arvore->apagarColuna($_POST["ID"],$IDOcorrencia);
    break;
    case "Linha":
        $arvore->apagarLinha($_POST["ID"],$IDOcorrencia);
    break;
}