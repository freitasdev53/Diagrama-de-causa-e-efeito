<?php
$server = "DESKTOP-2CM82J2\SQLEXPRESS";
$user = "sa";
$pw ="3841";
$database ="diagrama";
$connect = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;",$user,$pw);

if(isset($_GET["id"])){
    $idarvore = $_GET["id"];
}

if(isset($_POST["editarvore"])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $uparvore = "UPDATE arvore SET nome = '$nome' WHERE id = '$id'";
    $uparvorequery = odbc_exec($connect,$uparvore);
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

.adcolcontainer{
 
 line-height: 50px;
 text-align:center;
 position: absolute;
top:20%;
width:20%;
height:30%;
 bottom:0;
 margin-top:10px; 
left:40%;
background-color:#ededed;
  border:solid #2d4059;
position:fixed;
color:black;
}

#closeadcol{
    float:right;
    border:none;
margin:1%;
     background-color:black;
     color:white;
     cursor:pointer;
     
}
    </style>
</head>
<body>

<?php
$editcol = "SELECT * FROM arvore WHERE id = '$idarvore'";
$queryeditcol = odbc_exec($connect,$editcol);
while(odbc_fetch_row($queryeditcol)){
?>
    <div class="adcolcontainer">
<button id="closeadcol" onclick="window.location.href='arvore.php';">X</button>
<h3>Editar Coluna</h3>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php echo odbc_result($queryeditcol,"id");?>">
<input type="name" name="nome" placeholder="nome" maxlength="10" value="<?php echo odbc_result($queryeditcol,'nome'); ?>">
<button type="submit" name="editarvore">Editar Coluna</button>
</form>

</div>
<?php
}
?>
</body>

<html>