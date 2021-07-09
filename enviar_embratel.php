
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
	setTimeout("window.location='index.html'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>SISTEMA CYBER</title>


</head>



<body>








<?php
if($_FILES['script']['size'] > 0) {
    $permite = array('.rar');
    $type =$_FILES['script'] ['type'];
    $tamanho =$_FILES['script']['size'];
    

   
    


  $extensao = strtolower(substr($_FILES['script'] ['name'], -4));
 
  $novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
  $diretorio = "script/";



    if (!in_array($extensao,$permite)  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO txt!";
 // echo "<script>saidasuccessfully()</script>";
}
else if($tamanho > 2000000){
   echo "Limite máximo 2 MB!"; 
   //...
}
else
{ 

move_uploaded_file ($_FILES['script'] ['tmp_name'], $diretorio.$novo_nome )  ; 

$ba =$_POST['ba'];
$ccto =$_POST['ccto'];
$estacao =$_POST['estacao'];
$contato =$_POST['contato'];
$cliente =$_POST['cliente'];
$atv =$_POST['atv'];
$tipo =$_POST['tipo'];
$descricao =$_POST['desc'];
$acionamento =$_POST['acionamento'];









$query = "insert into atividade (ba,ccto,cliente,estacao,atividade,tipo,data,contato,descricao,anexo,acionamento)";

$query.= "values ('$ba','$ccto','$cliente','$estacao','$atv','$tipo',NOW(),'$contato','$descricao','$novo_nome','$acionamento')";




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



}
 
}
else
{


  $ba =$_POST['ba'];
  $ccto =$_POST['ccto'];
  $contato =$_POST['contato'];
  $estacao =$_POST['estacao'];
  $cliente =$_POST['cliente'];
  $atv =$_POST['atv'];
  $tipo =$_POST['tipo'];
  $descricao =$_POST['desc'];
  $acionamento =$_POST['acionamento'];
  
  
  
  
  
  
  
  
  
  $query = "insert into atividade (ba,ccto,cliente,estacao,atividade,tipo,data,contato,descricao,acionamento)";
  
  $query.= "values ('$ba','$ccto','$cliente','$estacao','$atv','$tipo',NOW(),'$contato','$descricao','$acionamento')";
  
  
  
  
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




}
?>

























</body>


</html>