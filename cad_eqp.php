

<!DOCTYPE html>
<html lang="en">
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



<?php

include "conn.php";

ini_set('display_errors', 0 );
error_reporting(0);





?>





<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='index.html'",3000);
  
  
}
</script>



<link rel="icon" href="img/oi.png">
  

 <title>CONTROLE DE EQP</title>
  <link rel="icon" href="img/logo_oi.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </script>
  <style>


  
 #voltar
 {

float:right;

 }
 
 body
 {
   
     background:white;
   
 }

 
  #teste{background:white;padding:1%; border: solid 2px black;margin-top: 0%; }
  
  
    .btn
    {

      background: #24DCF2;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }

    #edit
    {
       background: #F47315;
       


    }

    #edit:hover
    {

     background: #F4BE0D;


    }

    #carga
    {

    color:black;
    background: #EF8821;

    }
     #carga:hover
    {

    color:black;
    background: #E93F11;

    }
    #logout
    {

      background: white;
    }
    ;
  </style>
</head>
<body>
<p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
         <li class="active"><a href="index.html">Voltar</a></li>
      

                </ul>
            </div>

        </div>
    </div>



<div class="container">

  <div class="row content">


   
    <div class="col-sm-8  col-md-offset-2" id="teste" style="margin-top:6%;">
  <form role="form" name="seachform" method="post" action="envia_eqp.php " >


  <div class="form-group" >

 

<br><br>
<div class="form-group"> 
    <label for="email">N° série : </label><br>

    <input type="text"  class="form-control" name="serie"   id="serie" maxlength="20" required   >
</div> 

    <div class="form-group">  
    <label for="email" >Equipamentos:</label> <br>
    <select  name="eqp" class="form-control" required >
       <option value="ROTEADOR"  >ROTEADOR</option>
       <option value="MODEM"  >MODEM</option>
       <option value="GABINETE"  >GABINETE</option>
       <option value="EDD"  >EDD</option>
       <option value="ONT"  >ONT</option>
       <option value="OUTROS"  >OUTROS</option>
    
    </select>
        </div>
        <div class="form-group">  
    <label for="email" >Status:</label> <br>
    <select  name="status" class="form-control" required >
       <option value="EM USO"  >EM USO</option>
       <option value="CARGA"  >CARGA</option>
       <option value="RETIRADA"  >RETIRADA</option>
       <option value="RESERVA"  >RESERVA</option>
       <option value="REPASSADO"  >REPASSADO</option>
    
    </select>
        </div>
        <div class="form-group"> 
    <label for="email">Modelo : </label><br>

    <input type="text"  class="form-control" name="modelo"    required   >
</div> 
   
       <div class="form-group">
    <label for="email">Descrição: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="1000" placeholder="Máximo 1000 caracteres"></textarea>
    </div>

    




    
  </div>
  <button type="submit" value="Cadastror" class="btn btn-default"> <strong>Cadastro</strong> </button>
  
  
  
</form>


  
  </div>
 
</div>
<footer class="container-fluid " style="color:black; ">
  <p style="text-align:center;">Desenvolvido por Rudinei Rossales  </p>
</footer>





</body>
</html>

