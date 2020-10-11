
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
	setTimeout("window.location='cad_bd.php'",3000);
	
	
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
$obs =$_POST['obs'];









$query = "insert into bd (ba,ccto,data,obs)";

$query.= "values ('$ba','$ccto',NOW(),'$obs')";




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