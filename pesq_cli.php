<?php include "conn.php"; ?>
<?php 




?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="img/logo.png">






  <link rel="icon" href="img/key.png">
  <title>SISTEMA CYBER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron"  style="background-image: url(img/wall.jpg); background-size: cover;">
 
 </div>
<a href="index.html" id="test" style="float:right">Voltar</a>


<br>

<div class="container">
 
  
  <form class="form-inline" role="form"  method="POST" action="pesq_cli.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">CCTO ou CLIENTE</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Pesquisa" >
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>B.A</th>
        <th>CLIENTE</th>
        <th>CIRCUITO</th>
        <th>ESTAÇÃO</th>
        <th>CONTATO</th>
         <th>ATIVIDADE</th>
        <th>TIPO</th>
        <th>DATA</th>
         <th>OBS</th>
         <th>EDITAR</th>
        <th>ANEXO</th>

      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['nome'];
$sql = mysql_query ("select * from atividade where cliente  = '$busca' OR  ccto = '$busca'" );



$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
    <tbody>
    <td> <?php echo $dado ["ba"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?></td>
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["estacao"];  ?></td>
<td> <?php echo $dado ["contato"];  ?></td>
 <td> <?php echo $dado ["atividade"];  ?></td>
<td> <?php echo $dado ["tipo"];  ?></td>
<td> <?php echo $dado ["acionamento"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
<?php $script =  $dado ["anexo"];   ?>
<?php $ba =  $dado ["ba"];   ?>
<td><a  href='obs.php?ba=<?php echo $ba?>'  target='_blank' >VER</a></td>
<td><a href='edit.php?ba=<?php echo $ba?>'>EDITAR</a></td>
<?php if($dado ["anexo"] == null ){?>

<td></td>

    <?php }else{ ?>
<td><?php   echo "<a  href='script/$script"."'txt' target='_blank' class='btn btn-warning btn-xs' >Download</a>" ?></td>
    <?php } ?>

<?php } } }?>












</body>
</html>

