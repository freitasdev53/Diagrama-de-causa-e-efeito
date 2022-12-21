<?php
include"classes.php";
?>
<!Doctype HTML>
 <head>
    <title>Arvore</title>
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="arvore.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="arvore.css">
 </head>
 <body>
 <div class="navArvore">
        <button class="bt_adicionar_coluna">Adicionar</button>
    </div>
    <?php
    include"modalOptionsColuna.php";
    include"modalOptionsLinha.php";
    include"modalSalvaColuna.php";
    include"modalSalvaLinha.php";
    ?>
    <!--MODAIS-->
    <!--INICIO ARVORE-->
        <div class="arvore">
            <!--COLUNAS-->

            <!--/COLUNAS-->
        </div>
    <!--FIM ARVORE-->
 </body>
 <!--jQuery-->
</html>