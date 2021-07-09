
<?php
include "conn.php";


$serial=$_GET["serial"];

?>
<!DOCTYPE html>

<html lang="pt-br">
<head>




  <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery-min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>

<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: black;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }



</style>
  <title>SISTEMA CYBER</title>
  
  <meta charset="utf-8">
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



  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cyber</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">

<?php 
$sql = mysql_query ("select * from eqp  where serial = '$serial'" );





$row = mysql_num_rows($sql);

while ($dado = mysql_fetch_assoc($sql )){
if (mysql_num_rows($sql) > 0)

{
    $descricao =  $dado ["descricao"];



}
} 


?>


<div class="row content">


    <div class="col-sm-10 "  >
    
    <div id="teste">
  
       
       
  <div class="form-group">
    <label for="email">DESCRIÇÃO: </label>
    <textarea class="form-control" rows="15"  readonly  ><?php echo $descricao; ?></textarea>
  </div>



    



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    

  

 
 </div>
 
</div>


</body>
</html>

