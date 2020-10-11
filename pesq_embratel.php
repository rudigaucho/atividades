<?php include "conn.php"; ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>







<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
<title>SISTEMA CYBER</title>
  <meta charset="utf-8">

  <link rel="icon" href="img/logo.png">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 


   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron"  style="background-image: url(img/wall.jpg); background-size: cover;">
 
 </div>
<a href="index.html" id="test" style="float:right">Voltar</a>

 



  <form class="form-inline" role="form"   method="POST" action="pesq_embratel.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso">
  
  <div class="row">
   <label  for="data">
      Período
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DE" type="text" autocomplete="off" required/>
        <input class="form-control" id="date2" name="date2" placeholder="ATÉ" type="text" autocomplete="off" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
   orientation: 'top'
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
   orientation: 'top'
  })
 })
</script>

    <br>
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
        <th>B.A</th>
        <th>CLIENTE</th>
        <th>CIRCUITO</th>
        <th>CONTATO</th>
         <th>ATIVIDADE</th>
        <th>TIPO</th>
        <th>DATA</th>
         <th>OBS</th>
        <th>ANEXO</th>
        
      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{


$data = $_POST['date'];
$data2 = $_POST['date2'];
$sql = mysql_query ("select  * from atividade  where data BETWEEN   '$data' and '$data2' order by atividade asc; " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
<td> <?php echo $dado ["ba"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?></td>
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["contato"];  ?></td>
 <td> <?php echo $dado ["atividade"];  ?></td>
<td> <?php echo $dado ["tipo"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
<?php $script =  $dado ["anexo"];   ?>
<?php $ba =  $dado ["ba"];   ?>
<td><a  href='obs.php?ba=<?php echo $ba?>'  target='_blank' >VER</a></td>
<?php if($dado ["anexo"] == null ){?>

<td></td>

    <?php }else{ ?>
<td><?php   echo "<a  href='script/$script"."'txt' target='_blank' class='btn btn-warning btn-xs' >Download</a>" ?></td>
    <?php } ?>

<?php } } }?>





</body>
</html>

