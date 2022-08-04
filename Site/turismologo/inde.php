

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast Travel</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                  <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
                
                <li class="nav-item">
                  <a class="nav-link" href="login/login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro/cadastro.php">Cadastro</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="inde.php">Turismólogo</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0" method="post" action="../passeios/passeios.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </section>

    <!-- Texto de boas vindas-->


    <section id="welcome">
        <div class="container">
            <div class="welcome text-center">
                <h1>Cadastre-se como Turismólogo e ofereça passeios com a gente ;)</h1>
                <p></p>
                <button type="submit" class="btn btn-secondary"><a href="cadastro.php">Cadastrar</a></button>
            </div>
        </div>
    </section>


    <!-- Sobre nós-->

    

    
      <!------------------- Features ---------------->
    
      <section id="features">
          <div class="container">
              <div class="row justify-content-md-center">
                <div class="col col-lg-1 text-right">
                  
                    <i class="far fa-check-circle fa-3x"></i>
                </div>
                <div class="col-md-center">
                 <h4>Colaboradores cadastrados</h4>
                 <p>Todos os produtos são oferecidos 
                     por <br>colaboradores cadastrados e credênciados.                   
                 </p>
                </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col col-lg-1 text-right">
                  
                    <i class="far fa-calendar-check fa-3x"></i>
                    </div>
                        <div class="col-md-center">
                            <h4>Agendamento Prefixados</h4>
                                <p>Todos os Passeios são pré agendados<br>
                                em uma data especificada na pagina do mesmo. 
                                </p>
                        </div>
                    </div>
              <div class="row justify-content-md-center">
                    <div class="col col-lg-1 text-right">
                      
                        <i class="fas fa-user-tie fa-3x"></i>
                    </div>
                    <div class="col-md-center">
                    <h4>Cadastro por Verificação</h4>
                    <p>
                      O cadastro de turismólogo é<br>
                    préviamente autorizado e<br> verificado por um administrador.
                    </p>
                    </div>
              </div>
          </div>
    </section>
    
      
    

      <!--   Contatos    -->
      
      <section id="footer">
        <div class="container">
          <div class="row">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="col-md-3">
                  <h1>Features</h1>
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
            
            <div class="col-md-3">
                <h1>Contato</h1>
                
                
                <p style="color:#696969;"><i class="far fa-envelope fa-2x" style="color:lightgreen"></i>&nbsp; Email / andreia.agenterj@gmail.com</p>
                <h1>Suporte</h1>
                <p style="color:#696969;"><i class="far fa-envelope fa-2x" style="color: rgb(240, 99, 99)"></i>&nbsp; Email / machinemakers0@gmail.com</p>

                <p style="color:#696969;"><i class="far fa-map fa-2x"></i> Brasil, Rio de Janeiro</p>              
              </div>


              <div class="col-md-3">
                  <h1>Social</h1>
                  <p><a href="https://m.facebook.com/andreialimaagt/" style="color:#696969	;"><i class="fab fa-facebook fa-2x" style="color:cornflowerblue" ></i>&nbsp;&nbsp;&nbsp;  Andreia Lima</a></p>
                  <p><a href="#"style="color:#696969	;"><i class="fab fa-instagram fa-2x" style="color:palevioletred;"></i>&nbsp;&nbsp;&nbsp;  Andreia Lima</a></p>
                  
                </div>

                
                 

                    
          </div>
        </div>
      </section>
      
        <div id="final">  
        <p class="text-center">Todos os direitos reservados. ©</p>
      </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>