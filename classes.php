<?php
require"bdarvore.php";
if(isset($_GET["e"])){
    $_SESSION["IDOco"] = $_GET["e"];
}
class Arvore{
    //RETORNA TRUE OU FALSE, CONFERE SE AQUELA COLUNA EXISTE E LIBERA  VISUALIZAÇÃO
    public function getColunas($NUColuna,$IDOcorrencia){
        $v_SQL = odbc_exec(DB::conectarDatabase(),"SELECT * FROM E1 WHERE NUColuna = '$NUColuna' AND IDOcorrencia = '$IDOcorrencia' ");
        return $v_SQL;
    }
    //RETORNA AS LINHAS DE UMA COLUNA
    public function getLinhas($NUColuna,$IDOcorrencia){
        $v_SQL = odbc_exec(DB::conectarDatabase(),"SELECT * FROM E2 WHERE NUColuna = '$NUColuna' AND IDOcorrencia = '$IDOcorrencia' ");
        return $v_SQL;
    }
    //RETORNA A LISTA DE COLUNAS DISPONIVEIS DE 0 A 10
    public static function getSelectColunas($IDOcorrencia){
        $SQL = odbc_exec(DB::conectarDatabase(),"SELECT NUColuna FROM E1 WHERE IDOcorrencia = '$IDOcorrencia' ");
        return $SQL;
    }
    //SALVA OU EDITA UMA COLUNA
    public function salvaColuna($dados,$IDOcorrencia){
        $NUColuna = $dados['NUColuna'];
        if($dados['ID']){
            $v_SQL = odbc_exec(DB::conectarDatabase(),"UPDATE E1 SET NMColuna = '".$dados['NMColuna']."' WHERE ID = '".$dados['ID']."' AND IDOcorrencia = '$IDOcorrencia' ");
        }else{
            $v_SQL = odbc_exec(DB::conectarDatabase(),"INSERT INTO E1 (NUColuna,NMColuna,IDOcorrencia) VALUES ('$NUColuna','".$dados['NMColuna']."','$IDOcorrencia') ");
        }
        return $v_SQL;
    }
    //SALVA OU EDITA UMA LINHA DENTRO DA COLUNA
    public function salvaLinha($dados,$IDOcorrencia){
        $NUColuna = $dados['NUColuna'];
        $NMConteudo = $dados['NMConteudo'];
        $NMCor = $dados['NMCor'];
        $IDLinha = $dados['IDLinha'];
        if($dados['IDLinha']){
            $v_SQL = odbc_exec(DB::conectarDatabase(),"UPDATE E2 SET NMConteudo = '$NMConteudo', NMCor = '$NMCor' WHERE ID = '$IDLinha' AND IDOcorrencia = '$IDOcorrencia' ");
        }else{
            $v_SQL = odbc_exec(DB::conectarDatabase(),"INSERT INTO E2 (NUColuna,NMCor,NMConteudo,IDOcorrencia) VALUES ('$NUColuna','$NMCor','$NMConteudo','$IDOcorrencia') ");
        }
        
        return $v_SQL;
    }
    //APAGA UMA LINHA
    public static function apagarLinha($ID,$IDOcorrencia){
        $v_SQL = odbc_exec(DB::conectarDatabase(),"DELETE FROM E2 WHERE ID = '$ID' AND IDOcorrencia = '$IDOcorrencia' ");
        return $v_SQL;
    }
    public static function apagarColuna($ID,$IDOcorrencia){
        $v_SQL = odbc_exec(DB::conectarDatabase(),"DELETE FROM E1 WHERE NUColuna = '$ID' ") && odbc_exec(DB::conectarDatabase(),"DELETE FROM E2 WHERE NUColuna = '$ID' AND IDOcorrencia = '$IDOcorrencia' ");
        return $v_SQL;
    }
    //FIM
}
$arvore = new Arvore();