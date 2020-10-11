
<?php
include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	
	$extensao = strtolower(substr($_FILES['rat_frente'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";



move_uploaded_file ($_FILES['rat_frente'] ['tmp_name'], $diretorio.$novo_nome )	;

$extensao2 = strtolower(substr($_FILES['rat_verso'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";



move_uploaded_file ($_FILES['rat_verso'] ['tmp_name'], $diretorio.$novo_nome2 )	;




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_os.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

  <title>SISTEMA CYBER</title>


</head>



<body>








<?php

$ba =$_POST['ba'];
$ccto =$_POST['ccto'];
$tipo =$_POST['tipo'];
$obs =$_POST['obs'];







$query = "insert into os (ba,ccto,tipo,data,obs,rat_frente,rat_verso)";

$query.= "values ('$ba','$ccto','$tipo',NOW(),'$obs','$novo_nome','$novo_nome2')";




$sql = mysql_query($query);


if($sql )
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}




 

?>

























</body>


</html>