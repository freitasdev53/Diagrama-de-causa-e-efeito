<?php
$server = "DESKTOP-2CM82J2\SQLEXPRESS";
$user = "sa";
$pw ="3841";
$database ="diagrama";
$connect = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;",$user,$pw);

if(isset($_POST["delcol"])){

    $id = $_POST["id"];
    $sqldel = "DELETE FROM arvore WHERE id = '$id' ";
    $delquery = odbc_exec($connect,$sqldel);

    


}

?>

<?php


if(isset($_POST["adelem"])){
    $colelem = $_POST["colunaelemento"];
    $linha = $_POST["linha"];
    $elemento = $_POST["elemento"];
    $ligacao = $_POST["ligacao"];
    if(empty($_POST["colunaelemento"]) or empty($_POST["linha"]) or empty($_POST["elemento"]) or empty($_POST["ligacao"])){
        echo "<p>Preencha Todos os Campos!</p>";
    }
    else{
    $cadastrarelem = "INSERT INTO elementos ";
    $cadastrarelem .="(colunaelemento,linha,elemento,ligacao) ";
    $cadastrarelem .="VALUES ";
    $cadastrarelem .="('$colelem','$linha','$elemento','$ligacao') ";
    $cadastrarelemquery = odbc_exec($connect,$cadastrarelem);

    switch($colelem){
        case 1:
            header("location:#coluna1");
            break;
            case 2:
                header("location:#coluna2");
                break;
                case 3:
                    header("location#coluna3");
                    break;
                    case 4:
                        header("location:#coluna4");
                        break;
                        case 5:
                            header("location:#coluna5");
                            break;
                            case 6:
                                header("location:#coluna6");
                                break;
                                case 7:
                                    header("location:#coluna7");
                                    break;
                                    case 8:
                                        header("location:#coluna8");
                                        break;
                                        case 9:
                                            header("location:#coluna9");
                                            break;
                                            case 10:
                                                header("location:#coluna10");
                                                break;
    }

    }
}
?>

<?php
/////////RECEBER DADOS
if(isset($_POST["coladc"])){
    $nome = $_POST["nome"];
    $col = $_POST["col"];
  
    if((empty($_POST["nome"]))){
          echo"<p>Preencha o Nome e o Primeiro item Para Prosseguir</p>";
    }
    else{
        $cadastraritem = "INSERT INTO arvore ";
        $cadastraritem .="(nome,col) ";
        $cadastraritem .="VALUES ";
        $cadastraritem .="('$nome','$col') ";
        $cadastraritemquery = odbc_exec($connect,$cadastraritem);
        switch($col){
            case 1:
                header("location:#coluna1");
                break;
                case 2:
                    header("location:#coluna2");
                    break;
                    case 3:
                        header("location#coluna3");
                        break;
                        case 4:
                            header("location:#coluna4");
                            break;
                            case 5:
                                header("location:#coluna5");
                                break;
                                case 6:
                                    header("location:#coluna6");
                                    break;
                                    case 7:
                                        header("location:#coluna7");
                                        break;
                                        case 8:
                                            header("location:#coluna8");
                                            break;
                                            case 9:
                                                header("location:#coluna9");
                                                break;
                                                case 10:
                                                    header("location:#coluna10");
                                                    break;
        }
    }
}
?>

<!Doctype HTML>
<html lang="pt-br">
    <head>

 
 

        <title>Arvore de Causa e Efeito</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <style>
        *{
            text-decoration:none;
        }
        a{
            color:black;
        }
body{
  position:sticky;
}

     *{
         font-family:verdana, sans-serif; padding:0; margin:0;
     }
.diagrama{
    display:flex;
    flex-direction:row;
   flex-wrap:nowrap;
position:absolute;
}
.col1,.col2,.col3,.col4,.col5,.col6,.col7,.col8,.col9,.col10{
    position:relative;
    padding:0;
    width:300px;
    border-radius:10px;
    margin:1%;
    background-color:#ededed;
}

#idcol1,#idcol2,#idcol3,#idcol4,#idcol5,#idcol6,#idcol7,#idcol8,#idcol9,#idcol10{
    position:absolute;
    padding:0;
    width:300px;
    margin:1%;
    background-color:white;
}

input{width:97%;}
#coladc{
    width:100%;
}
#closeadelemc1,#closeadelemc2,#closeadelemc3,#closeadelemc4,#closeadelemc5,#closeadelemc6,#closeadelemc7,#closeadelemc8,#closeadelemc9,#closeadelemc10{
    float:right;
    border:none;
margin:1%;
padding:1%;
     background-color:black;
     color:white;
     cursor:pointer;
     
}

#closeadcol{
    float:right;
    border:none;
margin:1%;
     background-color:black;
     color:white;
     cursor:pointer;
     padding:1%;
}

.adcolcontainer{
 
  line-height: 50px;
  text-align:center;
  background-color:#ededed;
  border:solid #2d4059;

  color: black;
  position: absolute;
 top:20%;
 width:20%;
 height:33%;
  bottom:0;
  margin-top:10px; 
left:40%;
position:fixed;
}

.adelemc1container,.adelemc2container,.adelemc3container,.adelemc4container,.adelemc5container,.adelemc6container,.adelemc7container,.adelemc8container,.adelemc9container,.adelemc10container{
 
  
 line-height: 50px;
 text-align:center;
 background-color:  #ff6f3c;
 color: Black;
 position: absolute;
top:-2%;
width:100%;
height:97%;

 margin-top:10px; 
 background-color:#ededed;

}



.botoes{
    display:flex;
flex-direction:row;
justify-content:center;

}
.botoes button{
    margin:1%;
    
}
#delcol{
    float:right;
    padding:1%;
    color:black;
    background:transparent;
    border:none;
    cursor:pointer;
}

#colelemento{
    width:100%;
}



#adcol{
padding:0.3%;
background-color: #2d4059;
border:solid;
border-color: #2d4059;
margin:1%;
cursor:pointer;
color:white;
position:fixed;
z-index:10;
}



#adelemc1,#adelemc2,#adelemc3,#adelemc4,#adelemc5,#adelemc6,#adelemc7,#adelemc8,#adelemc9,#adelemc10{
    width:100%;
padding:0.3%;
background-color: #2d4059;
border:solid #2d4059;
cursor:pointer;
color:white;
}
.linha1col1,.linha1col2,.linha1col3,.linha1col4,.linha1col5,.linha1col6,.linha1col7,.linha1col8,.linha1col9,.linha1col10{

 text-align:center;
border:solid;
 color: black;
 position: absolute;
top:10%;
width:80%;
height:20%;
 bottom:0;
 margin-top:10px; 
left:8%;
border-radius:10px;
}
.linha2col1,.linha2col2,.linha2col3,.linha2col4,.linha2col5,.linha2col6,.linha2col7,.linha2col8,.linha2col9,.linha2col10{
    border-radius:10px;
 text-align:center;
 border:solid;
 color: black;
 position: absolute;
top:32%;
width:80%;
height:20%;
 bottom:0;
 margin-top:10px; 
left:8%;

}

.linha3col1,.linha3col2,.linha3col3,.linha3col4,.linha3col5,.linha3col6,.linha3col7,.linha3col8,.linha3col9,.linha3col10{
    border-radius:10px;
 text-align:center;
 border:solid;
 color: black;
 position: absolute;
top:54%;
width:80%;
height:20%;
 bottom:0;
 margin-top:10px; 
left:8%;

}

.linha4col1,.linha4col2,.linha4col3,.linha4col4,.linha4col5,.linha4col6,.linha4col7,.linha4col8,.linha4col9,.linha4col10{
    border-radius:10px;
 text-align:center;
 border:solid;
 color: black;
 position: absolute;
top:76%;
width:80%;
height:20%;
 bottom:0;
 margin-top:10px; 
left:8%;

}
#delelem{
    float:right;
    padding:1%;
    border:none;
    background:transparent;
    cursor:pointer;
}
#editc1l1,#editc1l2,#editc1l3,#editc1l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;

}

#editc2l1,#editc2l2,#editc2l3,#editc2l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc3l1,#editc3l2,#editc3l3,#editc3l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc4l1,#editc4l2,#editc4l3,#editc4l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc5l1,#editc5l2,#editc5l3,#editc5l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc6l1,#editc6l2,#editc6l3,#editc6l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc7l1,#editc7l2,#editc7l3,#editc7l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc8l1,#editc8l2,#editc8l3,#editc8l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc9l1,#editc9l2,#editc9l3,#editc9l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}
#editc10l1,#editc10l2,#editc10l3,#editc10l4{
    float:left;
    background:none;
    border:none;
    padding:1%;
    cursor:pointer;
}

.idcolunas{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    position:absolute;
    width:100%;
margin-top:0.3%;
}
.idcolunas p{
    width:300px;
}
textarea{
    width:150px;
    height:90px;
    resize: none;
}
.editcoluna:hover{
    color:red;
}

    </style>



</head>

<body>

<script>


     </script>
<div class="botoes">
   <button id="adcol">Adicionar Coluna</button>
   
</div>
<br>
<!---------------------------------------------------------------------------COL 1------------------->
<br>
<div class="diagrama">



<script>



         $(function(e){
            $(".adcolcontainer,.adelemc1container,.adelemc2container,.adelemc3container,.adelemc4container,.adelemc5container,.adelemc6container,.adelemc7container,.adelemc8container,.adelemc9container,.adelemc10container").hide();
        });



        $(function(e){
    $(".col1,.col2,.col3,.col4,.col5,.col6,.col7,.col8,.col9,.col10").css("visibility","hidden");
});
 
$(function(e){
    $(".linha1col1,.linha2col1,.linha3col1,.linha4col1").css("visibility","hidden");
});

$(function(e){
    $(".linha1col2,.linha2col2,.linha3col2,.linha4col2").css("visibility","hidden");
});

$(function(e){
    $(".linha1col3,.linha2col3,.linha3col3,.linha4col3").css("visibility","hidden");
});

$(function(e){
    $(".linha1col4,.linha2col4,.linha3col4,.linha4col4").css("visibility","hidden");
});

$(function(e){
    $(".linha1col5,.linha2col5,.linha3col5,.linha4col5").css("visibility","hidden");
});

$(function(e){
    $(".linha1col6,.linha2col6,.linha3col6,.linha4col6").css("visibility","hidden");
});

$(function(e){
    $(".linha1col7,.linha2col7,.linha3col7,.linha4col7").css("visibility","hidden");
});

$(function(e){
    $(".linha1col8,.linha2col8,.linha3col8,.linha4col8").css("visibility","hidden");
});

$(function(e){
    $(".linha1col9,.linha2col9,.linha3col9,.linha4col9").css("visibility","hidden");
});

$(function(e){
    $(".linha1col10,.linha2col10,.linha3col10,.linha4col10").css("visibility","hidden");
});




        function adicionarCol(){
            $(".adcolcontainer").show();
        }
  
        $(function(e){
            $("#adcol").on("click",adicionarCol);
            
        });

        function removerCol(){
            $(".adcolcontainer").hide();
        }
  
        $(function(e){
            $("#closeadcol").on("click",removerCol);
        });
      
     
/////////////////////////////////////////////ALTURA COLUNAS
var altura = $(window).height();

$(function(e){
    $(".col1,.col2,.col3,.col4,.col5,.col6,.col7,.col8,.col9,.col10").height(altura);
});


</script>

    <?php




if(isset($_POST["delelem"])){
    
    $idelem = $_POST["id"];
    $sqldelelem = "DELETE FROM elementos WHERE id = '$idelem' ";
    $delelemquery = odbc_exec($connect,$sqldelelem);
}


?>
<!--------------------------------------------COL1---------------------->

    <div class="col1" id="coluna1">
   
        <script>
$(function(e){
    $("#adelemc1").on("click",function(){
        $(".adelemc1container").show() & $(".linha1col1,.linha2col1,.linha3col1,.linha4col1").hide();
    });
});
$(function(e){
    $("#closeadelemc1").on("click",function(){
        $(".adelemc1container").hide() & $(".linha1col1,.linha2col1,.linha3col1,.linha4col1").show();
    });
});
            </script>
    <button id="adelemc1">Adicionar Elemento</button>
    <div class="adelemc1container">
<button id="closeadelemc1">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="1" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c1l1">1</option>
<option value="2" id="c1l2">2</option>
<option value="3" id="c1l3">3</option>
<option value="4" id="c1l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<a href="#coluna1"><button type="submit" name="adelem">Adicionar Elemento</button></a>
</form>
</div>

        <?php

$exibecol1 = "SELECT nome,id FROM arvore WHERE col = 1 ";

$sqlselectcol1 = "SELECT nome FROM arvore WHERE col = 1 ";
$selectcol1query = odbc_exec($connect,$sqlselectcol1);
$rowcol1 = odbc_fetch_row($selectcol1query);
if($rowcol1 == true){
echo"
<script>

$(function(e){
$('.col1').css('visibility','visible') & $('#c1').hide();
});
</script>
";
$exibecol1query = odbc_exec($connect,$exibecol1);
while(odbc_fetch_row($exibecol1query)){
        ?>
<form action="" method="POST">

<input type="hidden" name="id" value="<?php echo odbc_result($exibecol1query,"id")?>">
<button type="submit" name="delcol" id="delcol" class="delcol1" onclick="window.location.href = '#coluna1';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol1query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol1query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec1l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 1";

$conferec1l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 1";
$conferec1l1query = odbc_exec($connect,$conferec1l1);
$rowc1l1 = odbc_fetch_row($conferec1l1query);
if($rowc1l1 == true){

echo"<script>

var c1l1 = true;
var xc1l1 = true;
$(function(e){
$('.linha1col1').css('visibility','visible');
});
</script>
";

$queryexibec1l1 = odbc_exec($connect,$selectexibec1l1);
while(odbc_fetch_row($queryexibec1l1)){
?>

<div class="linha1col1">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec1l1,"id");?>" ><button id="editc1l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec1l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna1';">X</button>
</form>

<p id="elementc1l1"><?php echo wordwrap(odbc_result($queryexibec1l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col1").css("border-color","<?php echo odbc_result($queryexibec1l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c1l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec1l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 2";

$conferec1l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 2";
$conferec1l2query = odbc_exec($connect,$conferec1l2);
$rowc1l2 = odbc_fetch_row($conferec1l2query);
if($rowc1l2 == true){

echo"<script>
var c1l2 = true;

$(function(e){
$('.linha2col1').css('visibility','visible');
});
</script>
";

$queryexibec1l2 = odbc_exec($connect,$selectexibec1l2);
while(odbc_fetch_row($queryexibec1l2)){
?>

<div class="linha2col1">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec1l2,"id");?>" ><button id="editc1l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec1l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna1';">X</button>
</form>

<p id="elementc1l2"><?php echo wordwrap(odbc_result($queryexibec1l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col1").css("border-color","<?php echo odbc_result($queryexibec1l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c1l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec1l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 3";

$conferec1l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 3";
$conferec1l3query = odbc_exec($connect,$conferec1l3);
$rowc1l3 = odbc_fetch_row($conferec1l3query);
if($rowc1l3 == true){

echo"<script>

var c1l3 = true;

$(function(e){
$('.linha3col1').css('visibility','visible');
});
</script>
";

$queryexibec1l3 = odbc_exec($connect,$selectexibec1l3);
while(odbc_fetch_row($queryexibec1l3)){
?>

<div class="linha3col1">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec1l3,"id");?>" ><button id="editc1l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec1l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna1';">X</button>
</form>

<p id="elementc1l3"><?php echo wordwrap(odbc_result($queryexibec1l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col1").css("border-color","<?php echo odbc_result($queryexibec1l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c1l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec1l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 4";

$conferec1l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 1 AND linha = 4";
$conferec1l4query = odbc_exec($connect,$conferec1l4);
$rowc1l4 = odbc_fetch_row($conferec1l4query);
if($rowc1l4 == true){

echo"<script>

var c1l4 = true;

$(function(e){
$('.linha4col1').css('visibility','visible');
});
</script>
";

$queryexibec1l4 = odbc_exec($connect,$selectexibec1l4);
while(odbc_fetch_row($queryexibec1l4)){
?>

<div class="linha4col1">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec1l4,"id");?>" ><button id="editc1l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec1l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna1';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec1l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col1").css("border-color","<?php echo odbc_result($queryexibec1l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c1l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c1l1 & c1l2 & c1l3 & c1l4 == true){
        $('#adelemc1').attr('disabled','true') & $('#adelemc1').css('opacity','0.5')  & $('#adelemc1').css('cursor','not-allowed');
     }
if(c1l1 == true){
    $("#c1l1").hide();
}
if(c1l2 == true){
    $("#c1l2").hide();
}
if(c1l3 == true){
    $("#c1l3").hide();
}
if(c1l4 == true){
    $("#c1l4").hide();
}

        
    
    if(c1l1 | c1l2 | c1l3 | c1l4 == true){
            $(function(e){
                $('.delcol1').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 2------------------->

<div class="col2" id="coluna2">
        <script>
$(function(e){
    $("#adelemc2").on("click",function(){
        $(".adelemc2container").show() & $(".linha1col2,.linha2col2,.linha3col2,.linha4col2").hide();
    });
});
$(function(e){
    $("#closeadelemc2").on("click",function(){
        $(".adelemc2container").hide() & $(".linha1col2,.linha2col2,.linha3col2,.linha4col2").show();
    });
});
            </script>
    <button id="adelemc2">Adicionar Elemento</button>
    <div class="adelemc2container">
<button id="closeadelemc2">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="arvore.php" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="2" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c2l1">1</option>
<option value="2" id="c2l2">2</option>
<option value="3" id="c2l3">3</option>
<option value="4" id="c2l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol2 = "SELECT nome,id FROM arvore WHERE col = 2 ";

$sqlselectcol2 = "SELECT nome FROM arvore WHERE col = 2 ";
$selectcol2query = odbc_exec($connect,$sqlselectcol2);
$rowcol2 = odbc_fetch_row($selectcol2query);
if($rowcol2 == true){
echo"
<script>

$(function(e){
$('.col2').css('visibility','visible') & $('#c2').hide();
});
</script>
";
$exibecol2query = odbc_exec($connect,$exibecol2);
while(odbc_fetch_row($exibecol2query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol2query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol2" onclick="window.location.href = '#coluna2';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol2query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol2query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec2l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 1";

$conferec2l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 1";
$conferec2l1query = odbc_exec($connect,$conferec2l1);
$rowc2l1 = odbc_fetch_row($conferec2l1query);
if($rowc2l1 == true){

echo"<script>

var c2l1 = true;
var xc2l1 = true;
$(function(e){
$('.linha1col2').css('visibility','visible');
});
</script>
";

$queryexibec2l1 = odbc_exec($connect,$selectexibec2l1);
while(odbc_fetch_row($queryexibec2l1)){
?>
<div class="linha1col2">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec2l1,"id");?>" ><button id="editc2l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec2l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna2';">X</button>
</form>

<p id="elementc2l1"><?php echo wordwrap(odbc_result($queryexibec2l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col2").css("border-color","<?php echo odbc_result($queryexibec2l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c2l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec2l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 2";

$conferec2l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 2";
$conferec2l2query = odbc_exec($connect,$conferec2l2);
$rowc2l2 = odbc_fetch_row($conferec2l2query);
if($rowc2l2 == true){

echo"<script>
var c2l2 = true;

$(function(e){
$('.linha2col2').css('visibility','visible');
});
</script>
";

$queryexibec2l2 = odbc_exec($connect,$selectexibec2l2);
while(odbc_fetch_row($queryexibec2l2)){
?>

<div class="linha2col2">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec2l2,"id");?>" ><button id="editc2l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec2l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna2';">X</button>
</form>

<p id="elementc2l2"><?php echo wordwrap(odbc_result($queryexibec2l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col2").css("border-color","<?php echo odbc_result($queryexibec2l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c2l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec2l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 3";

$conferec2l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 3";
$conferec2l3query = odbc_exec($connect,$conferec2l3);
$rowc2l3 = odbc_fetch_row($conferec2l3query);
if($rowc2l3 == true){

echo"<script>

var c2l3 = true;

$(function(e){
$('.linha3col2').css('visibility','visible');
});
</script>
";

$queryexibec2l3 = odbc_exec($connect,$selectexibec2l3);
while(odbc_fetch_row($queryexibec2l3)){
?>

<div class="linha3col2">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec2l3,"id");?>" ><button id="editc2l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec2l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna2';">X</button>
</form>

<p id="elementc2l3"><?php echo wordwrap(odbc_result($queryexibec2l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col2").css("border-color","<?php echo odbc_result($queryexibec2l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c2l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec2l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 4";

$conferec2l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 2 AND linha = 4";
$conferec2l4query = odbc_exec($connect,$conferec2l4);
$rowc2l4 = odbc_fetch_row($conferec2l4query);
if($rowc2l4 == true){

echo"<script>

var c2l4 = true;

$(function(e){
$('.linha4col2').css('visibility','visible');
});
</script>
";

$queryexibec2l4 = odbc_exec($connect,$selectexibec2l4);
while(odbc_fetch_row($queryexibec2l4)){
?>

<div class="linha4col2">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec2l4,"id");?>" ><button id="editc2l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec2l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna2';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec2l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col2").css("border-color","<?php echo odbc_result($queryexibec2l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c2l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c2l1 & c2l2 & c2l3 & c2l4 == true){
        $('#adelemc2').attr('disabled','true') & $('#adelemc2').css('opacity','0.5')  & $('#adelemc2').css('cursor','not-allowed');
     }
if(c2l1 == true){
    $("#c2l1").hide();
}
if(c2l2 == true){
    $("#c2l2").hide();
}
if(c2l3 == true){
    $("#c2l3").hide();
}
if(c2l4 == true){
    $("#c2l4").hide();
}

        
    
    if(c2l1 | c2l2 | c2l3 | c2l4 == true){
            $(function(e){
                $('.delcol2').hide();
            });
        }

///////
</script>




<!---------------------------------------------------------------------------COL 3------------------->
<div class="col3" id="coluna3">
        <script>
$(function(e){
    $("#adelemc3").on("click",function(){
        $(".adelemc3container").show() & $(".linha1col3,.linha2col3,.linha3col3,.linha4col3").hide();
    });
});
$(function(e){
    $("#closeadelemc3").on("click",function(){
        $(".adelemc3container").hide() & $(".linha1col3,.linha2col3,.linha3col3,.linha4col3").show();
    });
});
            </script>
    <button id="adelemc3">Adicionar Elemento</button>
    <div class="adelemc3container">
<button id="closeadelemc3">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90"  ></textarea>
<br>
<input type="hidden" value="3" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c3l1">1</option>
<option value="2" id="c3l2">2</option>
<option value="3" id="c3l3">3</option>
<option value="4" id="c3l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol3 = "SELECT nome,id FROM arvore WHERE col = 3 ";

$sqlselectcol3 = "SELECT nome FROM arvore WHERE col = 3 ";
$selectcol3query = odbc_exec($connect,$sqlselectcol3);
$rowcol3 = odbc_fetch_row($selectcol3query);
if($rowcol3 == true){
echo"
<script>

$(function(e){
$('.col3').css('visibility','visible') & $('#c3').hide();
});
</script>
";
$exibecol3query = odbc_exec($connect,$exibecol3);
while(odbc_fetch_row($exibecol3query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol3query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol3" onclick="window.location.href = '#coluna3';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol3query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol3query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec3l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 1";

$conferec3l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 1";
$conferec3l1query = odbc_exec($connect,$conferec3l1);
$rowc3l1 = odbc_fetch_row($conferec3l1query);
if($rowc3l1 == true){

echo"<script>

var c3l1 = true;
var xc3l1 = true;
$(function(e){
$('.linha1col3').css('visibility','visible');
});
</script>
";

$queryexibec3l1 = odbc_exec($connect,$selectexibec3l1);
while(odbc_fetch_row($queryexibec3l1)){
?>

<div class="linha1col3">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec3l1,"id");?>" ><button id="editc3l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec3l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna3';">X</button>
</form>

<p id="elementc3l1"><?php echo wordwrap(odbc_result($queryexibec3l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col3").css("border-color","<?php echo odbc_result($queryexibec3l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c3l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec3l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 2";

$conferec3l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 2";
$conferec3l2query = odbc_exec($connect,$conferec3l2);
$rowc3l2 = odbc_fetch_row($conferec3l2query);
if($rowc3l2 == true){

echo"<script>
var c3l2 = true;

$(function(e){
$('.linha2col3').css('visibility','visible');
});
</script>
";

$queryexibec3l2 = odbc_exec($connect,$selectexibec3l2);
while(odbc_fetch_row($queryexibec3l2)){
?>

<div class="linha2col3">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec3l2,"id");?>" ><button id="editc3l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec3l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna3';">X</button>
</form>

<p id="elementc3l2"><?php echo wordwrap(odbc_result($queryexibec3l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col3").css("border-color","<?php echo odbc_result($queryexibec3l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c3l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec3l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 3";

$conferec3l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 3";
$conferec3l3query = odbc_exec($connect,$conferec3l3);
$rowc3l3 = odbc_fetch_row($conferec3l3query);
if($rowc3l3 == true){

echo"<script>

var c3l3 = true;

$(function(e){
$('.linha3col3').css('visibility','visible');
});
</script>
";

$queryexibec3l3 = odbc_exec($connect,$selectexibec3l3);
while(odbc_fetch_row($queryexibec3l3)){
?>

<div class="linha3col3">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec3l3,"id");?>" ><button id="editc3l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec3l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna3';">X</button>
</form>

<p id="elementc3l3"><?php echo wordwrap(odbc_result($queryexibec3l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col3").css("border-color","<?php echo odbc_result($queryexibec3l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c3l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec3l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 4";

$conferec3l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 3 AND linha = 4";
$conferec3l4query = odbc_exec($connect,$conferec3l4);
$rowc3l4 = odbc_fetch_row($conferec3l4query);
if($rowc3l4 == true){

echo"<script>

var c3l4 = true;

$(function(e){
$('.linha4col3').css('visibility','visible');
});
</script>
";

$queryexibec3l4 = odbc_exec($connect,$selectexibec3l4);
while(odbc_fetch_row($queryexibec3l4)){
?>

<div class="linha4col3">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec3l4,"id");?>" ><button id="editc3l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec3l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna3';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec3l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col3").css("border-color","<?php echo odbc_result($queryexibec3l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c3l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c3l1 & c3l2 & c3l3 & c3l4 == true){
        $('#adelemc3').attr('disabled','true') & $('#adelemc3').css('opacity','0.5')  & $('#adelemc3').css('cursor','not-allowed');
     }
if(c3l1 == true){
    $("#c3l1").hide();
}
if(c3l2 == true){
    $("#c3l2").hide();
}
if(c3l3 == true){
    $("#c3l3").hide();
}
if(c3l4 == true){
    $("#c3l4").hide();
}

        
    
    if(c3l1 | c3l2 | c3l3 | c3l4 == true){
            $(function(e){
                $('.delcol3').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 4------------------->
<div class="col4" id="coluna4">
        <script>
$(function(e){
    $("#adelemc4").on("click",function(){
        $(".adelemc4container").show() & $(".linha1col4,.linha2col4,.linha3col4,.linha4col4").hide();
    });
});
$(function(e){
    $("#closeadelemc4").on("click",function(){
        $(".adelemc4container").hide() & $(".linha1col4,.linha2col4,.linha3col4,.linha4col4").show();
    });
});
            </script>
    <button id="adelemc4">Adicionar Elemento</button>
    <div class="adelemc4container">
<button id="closeadelemc4">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="4" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c4l1">1</option>
<option value="2" id="c4l2">2</option>
<option value="3" id="c4l3">3</option>
<option value="4" id="c4l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol4 = "SELECT nome,id FROM arvore WHERE col = 4 ";

$sqlselectcol4 = "SELECT nome FROM arvore WHERE col = 4 ";
$selectcol4query = odbc_exec($connect,$sqlselectcol4);
$rowcol4 = odbc_fetch_row($selectcol4query);
if($rowcol4 == true){
echo"
<script>

$(function(e){
$('.col4').css('visibility','visible') & $('#c4').hide();
});
</script>
";
$exibecol4query = odbc_exec($connect,$exibecol4);
while(odbc_fetch_row($exibecol4query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol4query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol4" onclick="window.location.href = '#coluna4';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol4query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol4query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec4l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 1";

$conferec4l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 1";
$conferec4l1query = odbc_exec($connect,$conferec4l1);
$rowc4l1 = odbc_fetch_row($conferec4l1query);
if($rowc4l1 == true){

echo"<script>

var c4l1 = true;
var xc4l1 = true;
$(function(e){
$('.linha1col4').css('visibility','visible');
});
</script>
";

$queryexibec4l1 = odbc_exec($connect,$selectexibec4l1);
while(odbc_fetch_row($queryexibec4l1)){
?>

<div class="linha1col4">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec4l1,"id");?>" ><button id="editc4l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec4l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna4';">X</button>
</form>

<p id="elementc4l1"><?php echo wordwrap(odbc_result($queryexibec4l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col4").css("border-color","<?php echo odbc_result($queryexibec4l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c4l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec4l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 2";

$conferec4l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 2";
$conferec4l2query = odbc_exec($connect,$conferec4l2);
$rowc4l2 = odbc_fetch_row($conferec4l2query);
if($rowc4l2 == true){

echo"<script>
var c4l2 = true;

$(function(e){
$('.linha2col4').css('visibility','visible');
});
</script>
";

$queryexibec4l2 = odbc_exec($connect,$selectexibec4l2);
while(odbc_fetch_row($queryexibec4l2)){
?>

<div class="linha2col4">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec4l2,"id");?>" ><button id="editc4l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec4l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna4';">X</button>
</form>

<p id="elementc4l2"><?php echo wordwrap(odbc_result($queryexibec4l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col4").css("border-color","<?php echo odbc_result($queryexibec4l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c4l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec4l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 3";

$conferec4l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 3";
$conferec4l3query = odbc_exec($connect,$conferec4l3);
$rowc4l3 = odbc_fetch_row($conferec4l3query);
if($rowc4l3 == true){

echo"<script>

var c4l3 = true;

$(function(e){
$('.linha3col4').css('visibility','visible');
});
</script>
";

$queryexibec4l3 = odbc_exec($connect,$selectexibec4l3);
while(odbc_fetch_row($queryexibec4l3)){
?>

<div class="linha3col4">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec4l3,"id");?>" ><button id="editc4l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec4l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna4';">X</button>
</form>

<p id="elementc4l3"><?php echo wordwrap(odbc_result($queryexibec4l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col4").css("border-color","<?php echo odbc_result($queryexibec4l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c4l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec4l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 4";

$conferec4l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 4 AND linha = 4";
$conferec4l4query = odbc_exec($connect,$conferec4l4);
$rowc4l4 = odbc_fetch_row($conferec4l4query);
if($rowc4l4 == true){

echo"<script>

var c4l4 = true;

$(function(e){
$('.linha4col4').css('visibility','visible');
});
</script>
";

$queryexibec4l4 = odbc_exec($connect,$selectexibec4l4);
while(odbc_fetch_row($queryexibec4l4)){
?>

<div class="linha4col4">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec4l4,"id");?>" ><button id="editc4l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec4l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna4';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec4l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col4").css("border-color","<?php echo odbc_result($queryexibec4l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c4l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c4l1 & c4l2 & c4l3 & c4l4 == true){
        $('#adelemc4').attr('disabled','true') & $('#adelemc4').css('opacity','0.5')  & $('#adelemc4').css('cursor','not-allowed');
     }
if(c4l1 == true){
    $("#c4l1").hide();
}
if(c4l2 == true){
    $("#c4l2").hide();
}
if(c4l3 == true){
    $("#c4l3").hide();
}
if(c4l4 == true){
    $("#c4l4").hide();
}

        
    
    if(c4l1 | c4l2 | c4l3 | c4l4 == true){
            $(function(e){
                $('.delcol4').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 5------------------->
<div class="col5" id="coluna5">
        <script>
$(function(e){
    $("#adelemc5").on("click",function(){
        $(".adelemc5container").show() & $(".linha1col5,.linha2col5,.linha3col5,.linha4col5").hide();
    });
});
$(function(e){
    $("#closeadelemc5").on("click",function(){
        $(".adelemc5container").hide() & $(".linha1col5,.linha2col5,.linha3col5,.linha4col5").show();
    });
});
            </script>
    <button id="adelemc5">Adicionar Elemento</button>
    <div class="adelemc5container">
<button id="closeadelemc5">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="5" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c5l1">1</option>
<option value="2" id="c5l2">2</option>
<option value="3" id="c5l3">3</option>
<option value="4" id="c5l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol5 = "SELECT nome,id FROM arvore WHERE col = 5 ";

$sqlselectcol5 = "SELECT nome FROM arvore WHERE col = 5 ";
$selectcol5query = odbc_exec($connect,$sqlselectcol5);
$rowcol5 = odbc_fetch_row($selectcol5query);
if($rowcol5 == true){
echo"
<script>

$(function(e){
$('.col5').css('visibility','visible') & $('#c5').hide();
});
</script>
";
$exibecol5query = odbc_exec($connect,$exibecol5);
while(odbc_fetch_row($exibecol5query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol5query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol5" onclick="window.location.href = '#coluna5';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol5query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol5query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec5l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 1";

$conferec5l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 1";
$conferec5l1query = odbc_exec($connect,$conferec5l1);
$rowc5l1 = odbc_fetch_row($conferec5l1query);
if($rowc5l1 == true){

echo"<script>

var c5l1 = true;
var xc5l1 = true;
$(function(e){
$('.linha1col5').css('visibility','visible');
});
</script>
";

$queryexibec5l1 = odbc_exec($connect,$selectexibec5l1);
while(odbc_fetch_row($queryexibec5l1)){
?>

<div class="linha1col5">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec5l1,"id");?>" ><button id="editc5l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec5l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna5';">X</button>
</form>

<p id="elementc5l1"><?php echo wordwrap(odbc_result($queryexibec5l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col5").css("border-color","<?php echo odbc_result($queryexibec5l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c5l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec5l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 2";

$conferec5l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 2";
$conferec5l2query = odbc_exec($connect,$conferec5l2);
$rowc5l2 = odbc_fetch_row($conferec5l2query);
if($rowc5l2 == true){

echo"<script>
var c5l2 = true;

$(function(e){
$('.linha2col5').css('visibility','visible');
});
</script>
";

$queryexibec5l2 = odbc_exec($connect,$selectexibec5l2);
while(odbc_fetch_row($queryexibec5l2)){
?>

<div class="linha2col5">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec5l2,"id");?>" ><button id="editc5l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec5l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna5';">X</button>
</form>

<p id="elementc5l2"><?php echo wordwrap(odbc_result($queryexibec5l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col5").css("border-color","<?php echo odbc_result($queryexibec5l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c5l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec5l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 3";

$conferec5l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 3";
$conferec5l3query = odbc_exec($connect,$conferec5l3);
$rowc5l3 = odbc_fetch_row($conferec5l3query);
if($rowc5l3 == true){

echo"<script>

var c5l3 = true;

$(function(e){
$('.linha3col5').css('visibility','visible');
});
</script>
";

$queryexibec5l3 = odbc_exec($connect,$selectexibec5l3);
while(odbc_fetch_row($queryexibec5l3)){
?>

<div class="linha3col5">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec5l3,"id");?>" ><button id="editc5l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec5l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna5';">X</button>
</form>

<p id="elementc5l3"><?php echo wordwrap(odbc_result($queryexibec5l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col5").css("border-color","<?php echo odbc_result($queryexibec5l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c5l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec5l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 4";

$conferec5l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 5 AND linha = 4";
$conferec5l4query = odbc_exec($connect,$conferec5l4);
$rowc5l4 = odbc_fetch_row($conferec5l4query);
if($rowc5l4 == true){

echo"<script>

var c5l4 = true;

$(function(e){
$('.linha4col5').css('visibility','visible');
});
</script>
";

$queryexibec5l4 = odbc_exec($connect,$selectexibec5l4);
while(odbc_fetch_row($queryexibec5l4)){
?>

<div class="linha4col5">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec5l4,"id");?>" ><button id="editc5l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec5l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna5';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec5l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col5").css("border-color","<?php echo odbc_result($queryexibec5l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c5l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c5l1 & c5l2 & c5l3 & c5l4 == true){
        $('#adelemc5').attr('disabled','true') & $('#adelemc5').css('opacity','0.5')  & $('#adelemc5').css('cursor','not-allowed');
     }
if(c5l1 == true){
    $("#c5l1").hide();
}
if(c5l2 == true){
    $("#c5l2").hide();
}
if(c5l3 == true){
    $("#c5l3").hide();
}
if(c5l4 == true){
    $("#c5l4").hide();
}

        
    
    if(c5l1 | c5l2 | c5l3 | c5l4 == true){
            $(function(e){
                $('.delcol5').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 6------------------->
<div class="col6" id="coluna6">
        <script>
$(function(e){
    $("#adelemc6").on("click",function(){
        $(".adelemc6container").show() & $(".linha1col6,.linha2col6,.linha3col6,.linha4col6").hide();
    });
});
$(function(e){
    $("#closeadelemc6").on("click",function(){
        $(".adelemc6container").hide() & $(".linha1col6,.linha2col6,.linha3col6,.linha4col6").show();
    });
});
            </script>
    <button id="adelemc6">Adicionar Elemento</button>
    <div class="adelemc6container">
<button id="closeadelemc6">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" maxlength="90" ></textarea>
<br>
<input type="hidden" value="6" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c6l1">1</option>
<option value="2" id="c6l2">2</option>
<option value="3" id="c6l3">3</option>
<option value="4" id="c6l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol6 = "SELECT nome,id FROM arvore WHERE col = 6 ";

$sqlselectcol6 = "SELECT nome FROM arvore WHERE col = 6 ";
$selectcol6query = odbc_exec($connect,$sqlselectcol6);
$rowcol6 = odbc_fetch_row($selectcol6query);
if($rowcol6 == true){
echo"
<script>

$(function(e){
$('.col6').css('visibility','visible') & $('#c6').hide();
});
</script>
";
$exibecol6query = odbc_exec($connect,$exibecol6);
while(odbc_fetch_row($exibecol6query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol6query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol6" onclick="window.location.href = '#coluna6';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol6query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol6query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec6l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 1";

$conferec6l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 1";
$conferec6l1query = odbc_exec($connect,$conferec6l1);
$rowc6l1 = odbc_fetch_row($conferec6l1query);
if($rowc6l1 == true){

echo"<script>

var c6l1 = true;
var xc6l1 = true;
$(function(e){
$('.linha1col6').css('visibility','visible');
});
</script>
";

$queryexibec6l1 = odbc_exec($connect,$selectexibec6l1);
while(odbc_fetch_row($queryexibec6l1)){
?>

<div class="linha1col6">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec6l1,"id");?>" ><button id="editc6l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec6l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna6';">X</button>
</form>

<p ><?php echo wordwrap(odbc_result($queryexibec6l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col6").css("border-color","<?php echo odbc_result($queryexibec6l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c6l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec6l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 2";

$conferec6l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 2";
$conferec6l2query = odbc_exec($connect,$conferec6l2);
$rowc6l2 = odbc_fetch_row($conferec6l2query);
if($rowc6l2 == true){

echo"<script>
var c6l2 = true;

$(function(e){
$('.linha2col6').css('visibility','visible');
});
</script>
";

$queryexibec6l2 = odbc_exec($connect,$selectexibec6l2);
while(odbc_fetch_row($queryexibec6l2)){
?>

<div class="linha2col6">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec6l2,"id");?>" ><button id="editc6l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec6l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna6';">X</button>
</form>

<p id="elementc6l2"><?php echo wordwrap(odbc_result($queryexibec6l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col6").css("border-color","<?php echo odbc_result($queryexibec6l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c6l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec6l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 3";

$conferec6l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 3";
$conferec6l3query = odbc_exec($connect,$conferec6l3);
$rowc6l3 = odbc_fetch_row($conferec6l3query);
if($rowc6l3 == true){

echo"<script>

var c6l3 = true;

$(function(e){
$('.linha3col6').css('visibility','visible');
});
</script>
";

$queryexibec6l3 = odbc_exec($connect,$selectexibec6l3);
while(odbc_fetch_row($queryexibec6l3)){
?>

<div class="linha3col6">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec6l3,"id");?>" ><button id="editc6l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec6l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna6';">X</button>
</form>

<p id="elementc6l3"><?php echo wordwrap(odbc_result($queryexibec6l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col6").css("border-color","<?php echo odbc_result($queryexibec6l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c6l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec6l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 4";

$conferec6l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 6 AND linha = 4";
$conferec6l4query = odbc_exec($connect,$conferec6l4);
$rowc6l4 = odbc_fetch_row($conferec6l4query);
if($rowc6l4 == true){

echo"<script>

var c6l4 = true;

$(function(e){
$('.linha4col6').css('visibility','visible');
});
</script>
";

$queryexibec6l4 = odbc_exec($connect,$selectexibec6l4);
while(odbc_fetch_row($queryexibec6l4)){
?>

<div class="linha4col6">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec6l4,"id");?>" ><button id="editc6l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec6l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna6';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec6l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col6").css("border-color","<?php echo odbc_result($queryexibec6l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c6l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c6l1 & c6l2 & c6l3 & c6l4 == true){
        $('#adelemc6').attr('disabled','true') & $('#adelemc6').css('opacity','0.5')  & $('#adelemc6').css('cursor','not-allowed');
     }
if(c6l1 == true){
    $("#c6l1").hide();
}
if(c6l2 == true){
    $("#c6l2").hide();
}
if(c6l3 == true){
    $("#c6l3").hide();
}
if(c6l4 == true){
    $("#c6l4").hide();
}

        
    
    if(c6l1 | c6l2 | c6l3 | c6l4 == true){
            $(function(e){
                $('.delcol6').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 7------------------->
<div class="col7" id="coluna7">
        <script>
$(function(e){
    $("#adelemc7").on("click",function(){
        $(".adelemc7container").show() & $(".linha1col7,.linha2col7,.linha3col7,.linha4col7").hide();
    });
});
$(function(e){
    $("#closeadelemc7").on("click",function(){
        $(".adelemc7container").hide() & $(".linha1col7,.linha2col7,.linha3col7,.linha4col7").show();
    });
});
            </script>
    <button id="adelemc7">Adicionar Elemento</button>
    <div class="adelemc7container">
<button id="closeadelemc7">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" maxlength="90" ></textarea>
<br>
<input type="hidden" value="7" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c7l1">1</option>
<option value="2" id="c7l2">2</option>
<option value="3" id="c7l3">3</option>
<option value="4" id="c7l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol7 = "SELECT nome,id FROM arvore WHERE col = 7 ";

$sqlselectcol7 = "SELECT nome FROM arvore WHERE col = 7 ";
$selectcol7query = odbc_exec($connect,$sqlselectcol7);
$rowcol7 = odbc_fetch_row($selectcol7query);
if($rowcol7 == true){
echo"
<script>

$(function(e){
$('.col7').css('visibility','visible') & $('#c7').hide();
});
</script>
";
$exibecol7query = odbc_exec($connect,$exibecol7);
while(odbc_fetch_row($exibecol7query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol7query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol7" onclick="window.location.href = '#coluna7';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol7query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol7query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec7l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 1";

$conferec7l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 1";
$conferec7l1query = odbc_exec($connect,$conferec7l1);
$rowc7l1 = odbc_fetch_row($conferec7l1query);
if($rowc7l1 == true){

echo"<script>

var c7l1 = true;
var xc7l1 = true;
$(function(e){
$('.linha1col7').css('visibility','visible');
});
</script>
";

$queryexibec7l1 = odbc_exec($connect,$selectexibec7l1);
while(odbc_fetch_row($queryexibec7l1)){
?>

<div class="linha1col7">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec7l1,"id");?>" ><button id="editc7l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec7l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna7';">X</button>
</form>

<p id="elementc7l1"><?php echo wordwrap(odbc_result($queryexibec7l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col7").css("border-color","<?php echo odbc_result($queryexibec7l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c7l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec7l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 2";

$conferec7l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 2";
$conferec7l2query = odbc_exec($connect,$conferec7l2);
$rowc7l2 = odbc_fetch_row($conferec7l2query);
if($rowc7l2 == true){

echo"<script>
var c7l2 = true;

$(function(e){
$('.linha2col7').css('visibility','visible');
});
</script>
";

$queryexibec7l2 = odbc_exec($connect,$selectexibec7l2);
while(odbc_fetch_row($queryexibec7l2)){
?>

<div class="linha2col7">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec7l2,"id");?>" ><button id="editc7l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec7l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna7';">X</button>
</form>

<p id="elementc7l2"><?php echo wordwrap(odbc_result($queryexibec7l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col7").css("border-color","<?php echo odbc_result($queryexibec7l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c7l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec7l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 3";

$conferec7l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 3";
$conferec7l3query = odbc_exec($connect,$conferec7l3);
$rowc7l3 = odbc_fetch_row($conferec7l3query);
if($rowc7l3 == true){

echo"<script>

var c7l3 = true;

$(function(e){
$('.linha3col7').css('visibility','visible');
});
</script>
";

$queryexibec7l3 = odbc_exec($connect,$selectexibec7l3);
while(odbc_fetch_row($queryexibec7l3)){
?>

<div class="linha3col7">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec7l3,"id");?>" ><button id="editc7l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec7l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna7';">X</button>
</form>

<p id="elementc7l3"><?php echo wordwrap(odbc_result($queryexibec7l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col7").css("border-color","<?php echo odbc_result($queryexibec7l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c7l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec7l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 4";

$conferec7l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 7 AND linha = 4";
$conferec7l4query = odbc_exec($connect,$conferec7l4);
$rowc7l4 = odbc_fetch_row($conferec7l4query);
if($rowc7l4 == true){

echo"<script>

var c7l4 = true;

$(function(e){
$('.linha4col7').css('visibility','visible');
});
</script>
";

$queryexibec7l4 = odbc_exec($connect,$selectexibec7l4);
while(odbc_fetch_row($queryexibec7l4)){
?>

<div class="linha4col7">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec7l4,"id");?>" ><button id="editc7l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec7l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna7';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec7l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col7").css("border-color","<?php echo odbc_result($queryexibec7l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c7l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c7l1 & c7l2 & c7l3 & c7l4 == true){
        $('#adelemc7').attr('disabled','true') & $('#adelemc7').css('opacity','0.5')  & $('#adelemc7').css('cursor','not-allowed');
     }
if(c7l1 == true){
    $("#c7l1").hide();
}
if(c7l2 == true){
    $("#c7l2").hide();
}
if(c7l3 == true){
    $("#c7l3").hide();
}
if(c7l4 == true){
    $("#c7l4").hide();
}

        
    
    if(c7l1 | c7l2 | c7l3 | c7l4 == true){
            $(function(e){
                $('.delcol7').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 8------------------->
<div class="col8" id="coluna8">
        <script>
$(function(e){
    $("#adelemc8").on("click",function(){
        $(".adelemc8container").show() & $(".linha1col8,.linha2col8,.linha3col8,.linha4col8").hide();
    });
});
$(function(e){
    $("#closeadelemc8").on("click",function(){
        $(".adelemc8container").hide() & $(".linha1col8,.linha2col8,.linha3col8,.linha4col8").show();
    });
});
            </script>
    <button id="adelemc8">Adicionar Elemento</button>
    <div class="adelemc8container">
<button id="closeadelemc8">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="8" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c8l1">1</option>
<option value="2" id="c8l2">2</option>
<option value="3" id="c8l3">3</option>
<option value="4" id="c8l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol8 = "SELECT nome,id FROM arvore WHERE col = 8 ";

$sqlselectcol8 = "SELECT nome FROM arvore WHERE col = 8 ";
$selectcol8query = odbc_exec($connect,$sqlselectcol8);
$rowcol8 = odbc_fetch_row($selectcol8query);
if($rowcol8 == true){
echo"
<script>

$(function(e){
$('.col8').css('visibility','visible') & $('#c8').hide();
});
</script>
";
$exibecol8query = odbc_exec($connect,$exibecol8);
while(odbc_fetch_row($exibecol8query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol8query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol8" onclick="window.location.href = '#coluna8';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol8query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol8query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec8l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 1";

$conferec8l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 1";
$conferec8l1query = odbc_exec($connect,$conferec8l1);
$rowc8l1 = odbc_fetch_row($conferec8l1query);
if($rowc8l1 == true){

echo"<script>

var c8l1 = true;
var xc8l1 = true;
$(function(e){
$('.linha1col8').css('visibility','visible');
});
</script>
";

$queryexibec8l1 = odbc_exec($connect,$selectexibec8l1);
while(odbc_fetch_row($queryexibec8l1)){
?>

<div class="linha1col8">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec8l1,"id");?>" ><button id="editc8l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec8l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna8';">X</button>
</form>

<p id="elementc8l1"><?php echo wordwrap(odbc_result($queryexibec8l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col8").css("border-color","<?php echo odbc_result($queryexibec8l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c8l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec8l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 2";

$conferec8l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 2";
$conferec8l2query = odbc_exec($connect,$conferec8l2);
$rowc8l2 = odbc_fetch_row($conferec8l2query);
if($rowc8l2 == true){

echo"<script>
var c8l2 = true;

$(function(e){
$('.linha2col8').css('visibility','visible');
});
</script>
";

$queryexibec8l2 = odbc_exec($connect,$selectexibec8l2);
while(odbc_fetch_row($queryexibec8l2)){
?>

<div class="linha2col8">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec8l2,"id");?>" ><button id="editc8l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec8l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna8';">X</button>
</form>

<p id="elementc8l2"><?php echo wordwrap(odbc_result($queryexibec8l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col8").css("border-color","<?php echo odbc_result($queryexibec8l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c8l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec8l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 3";

$conferec8l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 3";
$conferec8l3query = odbc_exec($connect,$conferec8l3);
$rowc8l3 = odbc_fetch_row($conferec8l3query);
if($rowc8l3 == true){

echo"<script>

var c8l3 = true;

$(function(e){
$('.linha3col8').css('visibility','visible');
});
</script>
";

$queryexibec8l3 = odbc_exec($connect,$selectexibec8l3);
while(odbc_fetch_row($queryexibec8l3)){
?>

<div class="linha3col8">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec8l3,"id");?>" ><button id="editc8l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec8l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna8';">X</button>
</form>

<p id="elementc8l3"><?php echo wordwrap(odbc_result($queryexibec8l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col8").css("border-color","<?php echo odbc_result($queryexibec8l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c8l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec8l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 4";

$conferec8l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 8 AND linha = 4";
$conferec8l4query = odbc_exec($connect,$conferec8l4);
$rowc8l4 = odbc_fetch_row($conferec8l4query);
if($rowc8l4 == true){

echo"<script>

var c8l4 = true;

$(function(e){
$('.linha4col8').css('visibility','visible');
});
</script>
";

$queryexibec8l4 = odbc_exec($connect,$selectexibec8l4);
while(odbc_fetch_row($queryexibec8l4)){
?>

<div class="linha4col8">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec8l4,"id");?>" ><button id="editc8l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec8l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna8';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec8l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col8").css("border-color","<?php echo odbc_result($queryexibec8l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c8l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c8l1 & c8l2 & c8l3 & c8l4 == true){
        $('#adelemc8').attr('disabled','true') & $('#adelemc8').css('opacity','0.5')  & $('#adelemc8').css('cursor','not-allowed');
     }
if(c8l1 == true){
    $("#c8l1").hide();
}
if(c8l2 == true){
    $("#c8l2").hide();
}
if(c8l3 == true){
    $("#c8l3").hide();
}
if(c8l4 == true){
    $("#c8l4").hide();
}

        
    
    if(c8l1 | c8l2 | c8l3 | c8l4 == true){
            $(function(e){
                $('.delcol8').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 9------------------->
<div class="col9" id="coluna9">
        <script>
$(function(e){
    $("#adelemc9").on("click",function(){
        $(".adelemc9container").show() & $(".linha1col9,.linha2col9,.linha3col9,.linha4col9").hide();
    });
});
$(function(e){
    $("#closeadelemc9").on("click",function(){
        $(".adelemc9container").hide() & $(".linha1col9,.linha2col9,.linha3col9,.linha4col9").show();
    });
});
            </script>
    <button id="adelemc9">Adicionar Elemento</button>
    <div class="adelemc9container">
<button id="closeadelemc9">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="9" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c9l1">1</option>
<option value="2" id="c9l2">2</option>
<option value="3" id="c9l3">3</option>
<option value="4" id="c9l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol9 = "SELECT nome,id FROM arvore WHERE col = 9 ";

$sqlselectcol9 = "SELECT nome FROM arvore WHERE col = 9 ";
$selectcol9query = odbc_exec($connect,$sqlselectcol9);
$rowcol9 = odbc_fetch_row($selectcol9query);
if($rowcol9 == true){
echo"
<script>

$(function(e){
$('.col9').css('visibility','visible') & $('#c9').hide();
});
</script>
";
$exibecol9query = odbc_exec($connect,$exibecol9);
while(odbc_fetch_row($exibecol9query)){
        ?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($exibecol9query,"id")?>">

<button type="submit" name="delcol" id="delcol" class="delcol9" onclick="window.location.href = '#coluna9';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol9query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol9query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec9l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 1";

$conferec9l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 1";
$conferec9l1query = odbc_exec($connect,$conferec9l1);
$rowc9l1 = odbc_fetch_row($conferec9l1query);
if($rowc9l1 == true){

echo"<script>

var c9l1 = true;
var xc9l1 = true;
$(function(e){
$('.linha1col9').css('visibility','visible');
});
</script>
";

$queryexibec9l1 = odbc_exec($connect,$selectexibec9l1);
while(odbc_fetch_row($queryexibec9l1)){
?>

<div class="linha1col9">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec9l1,"id");?>" ><button id="editc9l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec9l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna9';">X</button>
</form>

<p id="elementc9l1"><?php echo wordwrap(odbc_result($queryexibec9l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col9").css("border-color","<?php echo odbc_result($queryexibec9l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c9l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec9l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 2";

$conferec9l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 2";
$conferec9l2query = odbc_exec($connect,$conferec9l2);
$rowc9l2 = odbc_fetch_row($conferec9l2query);
if($rowc9l2 == true){

echo"<script>
var c9l2 = true;

$(function(e){
$('.linha2col9').css('visibility','visible');
});
</script>
";

$queryexibec9l2 = odbc_exec($connect,$selectexibec9l2);
while(odbc_fetch_row($queryexibec9l2)){
?>

<div class="linha2col9">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec9l2,"id");?>" ><button id="editc9l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec9l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna9';">X</button>
</form>

<p id="elementc9l2"><?php echo wordwrap(odbc_result($queryexibec9l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col9").css("border-color","<?php echo odbc_result($queryexibec9l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c9l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec9l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 3";

$conferec9l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 3";
$conferec9l3query = odbc_exec($connect,$conferec9l3);
$rowc9l3 = odbc_fetch_row($conferec9l3query);
if($rowc9l3 == true){

echo"<script>

var c9l3 = true;

$(function(e){
$('.linha3col9').css('visibility','visible');
});
</script>
";

$queryexibec9l3 = odbc_exec($connect,$selectexibec9l3);
while(odbc_fetch_row($queryexibec9l3)){
?>

<div class="linha3col9">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec9l3,"id");?>" ><button id="editc9l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec9l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna9';">X</button>
</form>

<p id="elementc9l3"><?php echo wordwrap(odbc_result($queryexibec9l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col9").css("border-color","<?php echo odbc_result($queryexibec9l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c9l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec9l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 4";

$conferec9l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 9 AND linha = 4";
$conferec9l4query = odbc_exec($connect,$conferec9l4);
$rowc9l4 = odbc_fetch_row($conferec9l4query);
if($rowc9l4 == true){

echo"<script>

var c9l4 = true;

$(function(e){
$('.linha4col9').css('visibility','visible');
});
</script>
";

$queryexibec9l4 = odbc_exec($connect,$selectexibec9l4);
while(odbc_fetch_row($queryexibec9l4)){
?>

<div class="linha4col9">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec9l4,"id");?>" ><button id="editc9l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec9l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna9';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec9l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col9").css("border-color","<?php echo odbc_result($queryexibec9l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c9l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
                
    </div>
    <script>
        /////////////////////conferir linhas

     if(c9l1 & c9l2 & c9l3 & c9l4 == true){
        $('#adelemc9').attr('disabled','true') & $('#adelemc9').css('opacity','0.5')  & $('#adelemc9').css('cursor','not-allowed');
     }
if(c9l1 == true){
    $("#c9l1").hide();
}
if(c9l2 == true){
    $("#c9l2").hide();
}
if(c9l3 == true){
    $("#c9l3").hide();
}
if(c9l4 == true){
    $("#c9l4").hide();
}

        
    
    if(c9l1 | c9l2 | c9l3 | c9l4 == true){
            $(function(e){
                $('.delcol9').hide();
            });
        }

///////
</script>



<!---------------------------------------------------------------------------COL 10------------------->
<div class="col10" id="coluna10">

        <script>
$(function(e){
    $("#adelemc10").on("click",function(){
        $(".adelemc10container").show() & $(".linha1col10,.linha2col10,.linha3col10,.linha4col10").hide();
    });
});
$(function(e){
    $("#closeadelemc10").on("click",function(){
        $(".adelemc10container").hide() & $(".linha1col10,.linha2col10,.linha3col10,.linha4col10").show();
    });
});
            </script>
    <button id="adelemc10">Adicionar Elemento</button>
    <div class="adelemc10container">
<button id="closeadelemc10">X</button>
<br>
<h3>Adicionar Elemento</h3>
<form action="" method="POST">
<textarea name="elemento" maxlength="90" ></textarea>
<br>
<input type="hidden" value="10" name="colunaelemento">

<select name="linha">
<option value="0"> Selecionar Linha</option>
<option value="1" id="c10l1">1</option>
<option value="2" id="c10l2">2</option>
<option value="3" id="c10l3">3</option>
<option value="4" id="c10l4">4</option>
</select>

<select name="ligacao">
<option>Selecionar Ligação do Elemento</option>
<option value="blue">Azul</option>
<option value="red">Vermelho</option>
<option value="orange">Laranja</option>
<option value="gray">Cinza</option>
<option value="green">Verde</option>
<option value="yellow">Amarelo</option>
<option value="pink">Rosa</option>
<option value="black">Preto</option>
<option value="darkgreen">Verde Escuro</option>
<option value="darkblue">Azul Escuro</option>
</select>
<button type="submit" name="adelem">Adicionar Elemento</button>
</form>
</div>

        <?php

$exibecol10 = "SELECT nome,id FROM arvore WHERE col = 10 ";

$sqlselectcol10 = "SELECT nome FROM arvore WHERE col = 10 ";
$selectcol10query = odbc_exec($connect,$sqlselectcol10);
$rowcol10 = odbc_fetch_row($selectcol10query);
if($rowcol10 == true){
echo"
<script>

$(function(e){
$('.col10').css('visibility','visible') & $('#c10').hide();
});
</script>
";
$exibecol10query = odbc_exec($connect,$exibecol10);
while(odbc_fetch_row($exibecol10query)){
        ?>
<form action="" method="POST">

<input type="hidden" name="id" value="<?php echo odbc_result($exibecol10query,"id")?>">
<button type="submit" name="delcol" id="delcol" class="delcol10" onclick="window.location.href = '#coluna10';">X</button>
</form>
<a href="editarvore.php?id=<?php echo odbc_result($exibecol10query,'id');?>" class="editcoluna"><h1 align="center"><?php echo wordwrap(odbc_result($exibecol10query,"nome"));?></h1></a>

<!------------------------------------------------------>


<?php
$selectexibec10l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 1";

$conferec10l1 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 1";
$conferec10l1query = odbc_exec($connect,$conferec10l1);
$rowc10l1 = odbc_fetch_row($conferec10l1query);
if($rowc10l1 == true){

echo"<script>

var c10l1 = true;
var xc10l1 = true;
$(function(e){
$('.linha1col10').css('visibility','visible');
});
</script>
";

$queryexibec10l1 = odbc_exec($connect,$selectexibec10l1);
while(odbc_fetch_row($queryexibec10l1)){
?>

<div class="linha1col10">

<a href="editelems.php?id=<?php echo odbc_result($queryexibec10l1,"id");?>" ><button id="editc10l1"><i class="fas fa-pen"></i></button></a>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec10l1,"id")?>">
<button id="delelem" class="delelem1" name="delelem" onclick="window.location.href = '#coluna10';" >X</button>
</form>

<p id="elementc10l1"><?php echo wordwrap(odbc_result($queryexibec10l1,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha1col10").css("border-color","<?php echo odbc_result($queryexibec10l1,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"
    <script>
var c10l1 = false;

    </script>
    ";
}
?>

<!------------------------------------------------------>
<?php
$selectexibec10l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 2";

$conferec10l2 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 2";
$conferec10l2query = odbc_exec($connect,$conferec10l2);
$rowc10l2 = odbc_fetch_row($conferec10l2query);
if($rowc10l2 == true){

echo"<script>
var c10l2 = true;

$(function(e){
$('.linha2col10').css('visibility','visible');
});
</script>
";

$queryexibec10l2 = odbc_exec($connect,$selectexibec10l2);
while(odbc_fetch_row($queryexibec10l2)){
?>

<div class="linha2col10">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec10l2,"id");?>" ><button id="editc10l2"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec10l2,"id")?>">
<button id="delelem" class="delelem2" name="delelem" onclick="window.location.href = '#coluna10';">X</button>
</form>

<p id="elementc10l2"><?php echo wordwrap(odbc_result($queryexibec10l2,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha2col10").css("border-color","<?php echo odbc_result($queryexibec10l2,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c10l2 = false;
    
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec10l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 3";

$conferec10l3 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 3";
$conferec10l3query = odbc_exec($connect,$conferec10l3);
$rowc10l3 = odbc_fetch_row($conferec10l3query);
if($rowc10l3 == true){

echo"<script>

var c10l3 = true;

$(function(e){
$('.linha3col10').css('visibility','visible');
});
</script>
";

$queryexibec10l3 = odbc_exec($connect,$selectexibec10l3);
while(odbc_fetch_row($queryexibec10l3)){
?>

<div class="linha3col10">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec10l3,"id");?>" ><button id="editc10l3"><i class="fas fa-pen"></i></button></a>

<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec10l3,"id")?>">
<button id="delelem" class="delelem3" name="delelem" onclick="window.location.href = '#coluna10';">X</button>
</form>

<p id="elementc10l3"><?php echo wordwrap(odbc_result($queryexibec10l3,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha3col10").css("border-color","<?php echo odbc_result($queryexibec10l3,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c10l3 = false;
  
    </script>
    ";
}
?>
<!------------------------------------------------------>
<?php
$selectexibec10l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 4";

$conferec10l4 = "SELECT id,colunaelemento,linha,elemento,ligacao FROM elementos WHERE colunaelemento = 10 AND linha = 4";
$conferec10l4query = odbc_exec($connect,$conferec10l4);
$rowc10l4 = odbc_fetch_row($conferec10l4query);
if($rowc10l4 == true){

echo"<script>

var c10l4 = true;

$(function(e){
$('.linha4col10').css('visibility','visible');
});
</script>
";

$queryexibec10l4 = odbc_exec($connect,$selectexibec10l4);
while(odbc_fetch_row($queryexibec10l4)){
?>

<div class="linha4col10">
<a href="editelems.php?id=<?php echo odbc_result($queryexibec10l4,"id");?>" ><button id="editc10l4"><i class="fas fa-pen"></i></button></a>
<form action=""  method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryexibec10l4,"id")?>">
<button id="delelem" class="delelem4" name="delelem" onclick="window.location.href = '#coluna10';">X</button>
</form>

<p><?php echo wordwrap(odbc_result($queryexibec10l4,"elemento"),18,"\n",TRUE); ?></p>
</div>

<script>
$(function(e){
    $(".linha4col10").css("border-color","<?php echo odbc_result($queryexibec10l4,"ligacao"); ?>");
});
    </script>

<?php
}
}
else{
    echo"<script>
    var c10l4 = false;

    </script>
    ";
}
?>


<?php
}
}
   
        ?>
               
    </div>
    <script>
        /////////////////////conferir linhas

     if(c10l1 & c10l2 & c10l3 & c10l4 == true){
        $('#adelemc10').attr('disabled','true') & $('#adelemc10').css('opacity','0.5')  & $('#adelemc10').css('cursor','not-allowed');
     }
if(c10l1 == true){
    $("#c10l1").hide();
}
if(c10l2 == true){
    $("#c10l2").hide();
}
if(c10l3 == true){
    $("#c10l3").hide();
}
if(c10l4 == true){
    $("#c10l4").hide();
}

        
    
    if(c10l1 | c10l2 | c10l3 | c10l4 == true){
            $(function(e){
                $('.delcol10').hide();
            });
        }

///////
</script>



<!------------------------------------ADITEM---------------------------->



<div class="adcolcontainer">
<button id="closeadcol">X</button>
<h3>Adicionar Coluna</h3>
<form action="" method="POST">
<input type="name" name="nome" placeholder="nome" maxlength="10">
<select name="col">
<option>Selecionar Coluna</option>
<option value="1" id="c1">1</option>
<option value="2" id="c2">2</option>
<option value="3" id="c3">3</option>
<option value="4" id="c4">4</option>
<option value="5" id="c5">5</option>
<option value="6" id="c6">6</option>
<option value="7" id="c7">7</option>
<option value="8" id="c8">8</option>
<option value="9" id="c9">9</option>
<option value="10" id="c10">10</option>
</select>
<button type="submit" name="coladc" >Adicionar</button>
</form>

</div>

<!------------------------------------------adelemc1------------------>


</body>
    </html>
<?php

////////////////////CONFERIR SE AS COLUNAS ESTÃO PREENCHIDAS
if($rowcol1 & $rowcol2 & $rowcol3 & $rowcol4 & $rowcol5 & $rowcol6 & $rowcol7 & $rowcol8 & $rowcol9 & $rowcol10 == true){
    echo"
    <script>
$(function(e){
$('#adcol').attr('disabled','true') & $('#adcol').css('opacity','0.5')  & $('#adcol').css('cursor','not-allowed');
});
    </script>
    ";
}

?>
