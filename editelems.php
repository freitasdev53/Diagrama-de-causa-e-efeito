<?php
$server = "DESKTOP-2CM82J2\SQLEXPRESS";
$user = "sa";
$pw ="3841";
$database ="diagrama";
$connect = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;",$user,$pw);
if(isset($_GET["id"])){
    $idelem = $_GET["id"];
}

if(isset($_POST["editelementos"])){
    $id = $_POST["id"];
    $ligacao = $_POST["ligacao"];
    $elemento = $_POST["elemento"];
    $upelem = "UPDATE elementos SET elemento = '$elemento', ligacao = '$ligacao' WHERE id = '$id'";
    $upelemquery = odbc_exec($connect,$upelem);
    header("location:arvore.php");
}

?>
<!Doctype HTML>
<html lang="pt-br">
    <head>
    <title>Arvore de Causa e Efeito</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
.adelemcontainer{
  
 line-height: 50px;
 text-align:center;
 background-color:#ededed;
  border:solid #2d4059;
 color: black;
 position: absolute;
top:-1%;
width:20%;
height:97%;
left:40%;
right:40%;
 margin-top:10px; 
}

#closeadelem{
    float:right;
border:none;
margin:1%;
     background-color:black;
     color:white;
     cursor:pointer;
     
}
textarea{
    width:150px;
    height:90px;
    resize: none;
}
    </style>
</head>
<body>

<?php
$editelem = "SELECT * FROM elementos WHERE id = '$idelem'";
$queryeditelem = odbc_exec($connect,$editelem);
while(odbc_fetch_row($queryeditelem)){
?>
    <div class="adelemcontainer">
<button id="closeadelem" onclick="window.location.href ='arvore.php';">X</button>
<br>
<h3>Editar Elemento</h3>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo odbc_result($queryeditelem,"id");?>">
<textarea name="elemento" maxlength="90" ><?php echo odbc_result($queryeditelem,"elemento");?></textarea>
<br>

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
<button type="submit" name="editelementos">Adicionar Elemento</button>
</form>
</div>
<?php
}
?>
</body>

<html>