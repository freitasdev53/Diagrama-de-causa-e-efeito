<?php
require"classes.php";

$acao = $_POST["acao"];
$IDOcorrencia = $_SESSION["IDOco"];
switch($acao){
    case "Coluna":
        $dados = array();
        $dados = [
            "NMColuna" => $_POST["nome"],
            "NUColuna" => $_POST["numero"]
        ];
        $arvore->salvaColuna($dados,$IDOcorrencia);
    break;
    case "Linha":
        $dados = [
            "NMCor" => $_POST["ligacao"],
            "NMConteudo" => $_POST["conteudo"],
            "NUColuna" => $_POST["numero"],
            "IDLinha" => $_POST["ID"]
        ];
        $arvore->salvaLinha($dados,$IDOcorrencia);
    break;
}