
<?php
include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	
	


	
	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_ccto.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>SISTEMA CYBER</title>


</head>



<body>








<?php

$id =$_POST['id_cli'];
$ccto =$_POST['ccto'];
$top =$_POST['top'];
$end_A =$_POST['end_A'];
$end_B =$_POST['end_B'];









$query = "insert into ccto (ccto,id_cli,topologia,end_A,end_B)";

$query.= "values ('$ccto','$id','$top','$end_A','$end_B')";




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