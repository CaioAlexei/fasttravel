<?php
session_start();
if(IsSet($_SESSION['usuario']))
  $nome_usuario=$_SESSION['usuario'];
if(IsSet($_SESSION['senha']))
  $senha_usuario=$_SESSION['senha'];
if(IsSet($_SESSION['chave'])){
  $chave_usuario=$_SESSION['chave'];
}

 
 $query = "SELECT * FROM usuarios_comuns WHERE nome_usuario = '$nome_usuario'";


 $result = mysqli_query($con, $query);
 $logged = mysqli_fetch_assoc($result);

if(empty($nome_usuario) OR empty ($senha_usuario)){
   
       
       
   ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast Travel</title>
    <link rel="stylesheet" href="../../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../../login/login.css">
</head>
<body>
    <!---------------Header--------------->


    <section id="header">

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Fast Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../../index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../login/login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../cadastro/cadastro.php">Cadastrar</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

    </section>

    <section id="welcome">
      <div class="container">
          
          <div class="welcome text-left">
                <h1>Alerta !</h1><br>
              <?php
       echo "Você não efetuou o Login!<br />";
       echo"<a href='../../login/login.php'>Efetuar Login</a> <br />";
       echo"<a href='../../index.html'>Voltar para pagina incial</a>";
       
       mysqli_close($con);
    ?>
            
          </div>
      </div>
  </section>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
 <?php
   exit; 
   
}

if ($logged['senha'] !=   $senha_usuario ) {
    $print2 = $logged['nome_usuario'];
   $print = $logged['senha'];
   echo "Você não efetuou o LoginB!<br />";
   echo"<a href='login.php'>Efetuar Login</a> <br />";
   echo"<a href='index.html'>Voltar para pagina incial</a>";
   echo"$nome_usuario,$senha_usuario,$print,$print2";
   mysqli_close($con);
   exit; 
  
    
                    
  
}

if ($logged['chave'] !=   0 ) {
   echo "Você não tem a autorização necessária para continuar!<br />";
   echo"<a href='login.php'>Efetuar Login</a> <br />";
   echo"<a href='index.html'>Voltar para pagina incial</a>";
   echo"$nome_usuario,$senha_usuario";
    
   mysqli_close($con);
   exit; 
                    
  
}
 
 


 ?>
 
