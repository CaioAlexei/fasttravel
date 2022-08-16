<?php session_start(); ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
  </head>
  <body>
    <section id="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Fast Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>                
                <li class="nav-item">
                <a class="nav-link" href="#services">Serviços</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#footer">Sobre Nós</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="passeios/mostrarpasseios.php">Passeios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="passeios/mostrarpasseios.php">Perfil - </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
                
                
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="passeios/passeios.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
    </section>

    <div class="container" style="text-align:center;">      
        <img src="fotos/caio.jpeg" width="100px" heigh="100px" alt="Foto de Perfil" style="margin: auto; border-radius: 50%;" >            
        <br><label for="nome">Caio Alexei</label><br><br>

    </div>
    
    <div class="container">
        <form>
            <div class="row">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" class="form-control" placeholder= "Nome" value="<?php echo $_SESSION['nome']?>">
                </div>
                <div class="col">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="sobrenome" class="form-control" placeholder= "Sobrenome" value="<?php echo $_SESSION['sobrenome']?>">
                </div>
                
            </div><br>


            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email1">Email</label>
                        <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" value="<?php echo $_SESSION['email']?>">
                        <small id="emailHelp" class="form-text text-muted">Nunca iremos compartilhar seu email com ninguém.</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                        <small id="Usernamehelp" class="form-text text-muted">Ex: Zézinho123</small>
                    </div>
                </div>                                    
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" aria-describedby="cpfhelp" placeholder="CPF">
                        <small class="form-text text-muted">Ex: 123.456.789-12</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="CEP">
                        <small class="form-text text-muted">Ex: 12345-678</small>                        
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Telefone">Telefone</label>
                        <input type="text" class="form-control" id="tel" placeholder="tel">
                        <small class="form-text text-muted">Ex: (12) 9 3456-7890</small>                        
                    </div>
                </div>                    
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>  
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>