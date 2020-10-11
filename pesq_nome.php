<?php include "conn.php"; ?>
<?php 




?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="apa.jpg">

<link rel="icon" href="img/logo_oi.ico">




  <link rel="icon" href="img/key.png">
  <title>SISTEMA CYBER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<a href="cabo.php" id="test" style="float:right">Voltar</a>


<br>

<div class="container">
 
  
  <form class="form-inline" role="form"  method="POST" action="pesq_nome.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">Digite o nome do cliente</label>
      <input type="text" class="form-control"  name="nome" placeholder="Pesquisa" required >
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>CABO</th>
        <th>ORIGEM</th>
        <th>DESTINO</th>
        <th>CLIENTE</th>
        <th>OBS</th>
        <th>DATA</th>
          <th>DELETAR</th>

      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['nome'];
$sql = mysql_query ("select * from cabos   where cliente like '%".$busca."%'  order by cabo;" );



$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
    <tbody>
      <tr class="success">
            <?php $id = $dado ["id"]; ?> 
      <td> <?php echo $dado ["cabo"];  ?></td>
<td> <?php echo $dado ["origem"];  ?></td>
<td> <?php echo $dado ["destino"];  ?></td>
 <td> <?php echo $dado ["cliente"];  ?></td>
 <td> <?php echo $dado ["obs"];  ?></td>
  <td> <?php echo $dado ["data"];  ?></td>
  <td> <a href='del.php?id=<?php echo $id ?>'>DELETAR</a></td>


<?php } } }?>








</body>
</html>

