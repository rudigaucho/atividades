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
 
  
  <form class="form-inline" role="form"  method="POST" action="pesq_eqp.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">N° SÉRIE OU EQUIPAMENTO</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Pesquisa" >
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>SERIAL</th>
        <th>EQUIPAMENTO</th>
        <th>MODELO</th>
        <th>DESCRIÇÃO</th>
         <th>DATA</th>
       

      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['nome'];
$sql = mysql_query ("select * from eqp where serial  = '$busca' OR  eqp = '$busca' order by data desc"  );



$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
    <tbody>
<td> <?php echo $dado ["serial"];  ?></td>
<td> <?php echo $dado ["eqp"];  ?></td>
<td> <?php echo $dado ["modelo"];  ?></td>
<td> <?php echo $dado ["descricao"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>




  <?php } } } ?>








</body>
</html>

