
<?php
include "conn.php";
session_start();



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">


 <script src="../jquery-min.js"></script>
 <script src="../jquery-ui.js"></script>
 <script src="../jquery-ui.min.js"></script>
<script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='index.html'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Cadastro Equipamento</title>


</head>



<body>








<?php


$eqp =$_POST['eqp'];
$serie =$_POST['serie'];
$modelo =$_POST['modelo'];
$obs =$_POST['obs'];










$query = "insert into eqp (serial,eqp,modelo,descricao,data)";

$query.= "values ('$serie','$eqp','$modelo','$obs',NOW())";




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