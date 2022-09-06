<?php
$con = new MySQLi('localhost', 'root', '', 'fasttravel');
if(IsSet($_SESSION['nome_usuario'])){
  $nome_usuario=$_SESSION['nome_usuario'];
}
if(IsSet($_SESSION['senha'])){
  $senha_usuario=$_SESSION['senha'];
}
if(IsSet($_SESSION['chave'])){
  $chave_usuario=$_SESSION['chave'];
}

$query = "SELECT * FROM usuarios_comuns WHERE nome_usuario = '$nome_usuario'";
$result = mysqli_query($con, $query);
$logged = mysqli_fetch_assoc($result);

if(empty($nome_usuario) OR empty($senha_usuario) OR empty($chave_usuario) OR ($logged['senha'] != $senha_usuario) OR ($logged['chave'] != 0) ){

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <script src="https://kit.fontawesome.com/1e3a3bae57.js" crossorigin="anonymous"></script>

    <title>Fast Travel</title>       
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!---------------Header--------------->


    <section id="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Fast Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                </li>   
              </ul>
              <form class="form-inline my-2 my-lg-0" method="post" action="passeios/passeios.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </section>

    <div class="container">          
        <div class="welcome text-left">
            <h1>Error</h1><br>
<?php
if(empty($nome_usuario) OR empty($senha_usuario) OR empty($chave_usuario)){

    echo "Você não efetuou o Login!<br />";
    echo"<a href='../../login/login.php'>Efetuar Login</a> <br />";
    echo"<a href='../../index.html'>Voltar para pagina incial</a>";                
    mysqli_close($con);
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
                
            
         </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
?>