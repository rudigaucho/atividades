

<!DOCTYPE html>

<html lang="pt-br">
<head>


<link rel="icon" href="img/logo.png">

  <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>

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
      
      
      <li class="active"><a href="index.html">Página inicial</a></li> 
      
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >
    
    <div id="teste">
  <form class="form" role="form" name="seachform" method="post" action="enviar_embratel.php " enctype="multipart/form-data">

    <div class="form-group">

       <label for="email">BA:</label>
      <input type="text" class="form-control" id="ba" name="ba" >
      <span style="font-size:10px;"> <?php echo rand(1,100000); ?> </span>
    </div>
    
 
       <div class="form-group">
     <label for="pwd">CIRCUITO:</label>
      <input type="text" class="form-control" id="ccto" name="ccto">
    </div>
    <div class="form-group">
     <label for="pwd">CLIENTE:</label>
      <input type="text" class="form-control" id="cliente" name="cliente">
    </div>
    <div class="form-group">
     <label for="pwd">ESTAÇÃO:</label>
      <input type="text" class="form-control"  name="estacao">
    </div>
       <div class="form-group">
     <label for="pwd">CONTATO:</label>
      <input type="text" class="form-control" id="contato" name="contato">
    </div>

    <div class="form-group">

        <label for="sel1">ATIVIDADE:</label>
       <select class="form-control "  name="atv"  >


         <option value="BD">  BD </option>
         <option value="OS">  OS </option>
       


        </select><br>
        </div>


        <div class="form-group">

        <label for="sel1">ACIONAMENTO:</label>
       <select class="form-control"  name="acionamento"  >


         <option value="USUARIO">  USUARIO </option>
         <option value="EMPREGADO">  EMPREGADO </option>
         <option value="SEM CONTATO">  SEM CONTATO </option>
         <option value="PREVENTIVA">  PREVENTIVA </option>
         <option value="DIRETO">  DIRETO </option>
         <option value="ND">  ND </option>
       


        </select><br>
        </div>


        <div class="form-group">

        <label for="sel1">TIPO:</label>
       <select class="form-control "  name="tipo"  >


         <option value="ATIVACAO">  ATIVAÇÃO </option>
         <option value="RETIRADA">  RETIRADA </option>
         <option value="MUDVEL">  MUDVEL </option>
         <option value="INSCORINS">  INSCORINS </option>
         <option value="ND">  ND </option>

        </select><br>
        </div>


       
       
  <div class="form-group">
    <label for="email">DESCRIÇÃO: </label>
    <textarea class="form-control" rows="5"  name="desc" maxlength="1000"></textarea><br>
    <a  href='script/os_ou_bd.txt' target='_blank'  >Mácara</a>
  </div>

  <div class="form-group">
    <label for="email">Insira seu anexo (rar)</label>  <br>
    <label for="email" >Máximo 2MB:</label>
   
    <input type="file" id="script"  name="script"   />
  
  </div>

  
    
    
 

     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar" > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>

