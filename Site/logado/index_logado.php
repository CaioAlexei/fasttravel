<?php
session_start();
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast Travel</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
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
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                  <a class="nav-link" href="#services">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#footer">Sobre Nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="passeios/mostrarpasseios.php">Passeios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="passeios/mostrarpasseios.php">Perfil - <?php echo $_SESSION['nome']; ?></a>
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

    <!-- Texto de boas vindas-->


    <section id="welcome">
        <div class="container">
            <div class="welcome text-center">
                <h1>Adquira Já o Seu Passeio ;)</h1>
                <p>Na FastTravel você pode comprar e participar de diversos passeios confeccionados por Turismólogos em todo Rio de Janeiro.</p>
                <button type="submit" class="btn btn-secondary"><a href="passeios/mostrarpasseios.php">Dar um Travel</a></button>
            </div>
        </div>
    </section>


    <!-- Sobre nós-->

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-justify">
                    <img src="../imagens/paisagem7.jpg" width="100%">
                </div>
                <div class="col-md-6">
                    <h3>Diversos Pacotes e Passeios a Sua Escolha</h3>
                    <p class="text-justify">
                            Por meio da FastTravel você tem a opção de escolher para entre milhares de Pacotes/Passeios 
                        que são realizados por Turismólogos ou Agências que possuem o cadastro nacional de Turismo.
                        <br><br>
                        Nossa empresa trabalha como intermediário entre o Turismólogos e Agências e o seu cliente, facilitando para
                        que os dois lados possam se conectar facilmente.
                    </p>

                </div>
                
            </div>
        </div>
    </section>

    <section class="py-5" id="services">
        <div class="container py-5">
          <div class="row mb-5">
            <div class="col text-center">
              <h1 class="display-4">Serviços</h1>
              <p class="lead text-muted"></p>
            </div>
          </div>
                    <div class="row text-center">
                      <div class="col-md-6 col-lg-3">
                        <div class="mb-5 m-md-0">
                          <i class="fas fa-plane-departure fa-5x text-info"></i><br><br>
                          <h5 class="font-weight-light">Agências Cadastradas</h5>
                          <p class="my3 text-muted lead">Agências com cadastro prévio e verificadas por nós</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="mb-5 m-md-0">
                          <i class="fas fa-hotel fa-5x text-info"></i><br><br>
                          <h5 class="font-weight-light">Localização mais Próxima</h5>
                          <p class="my3 text-muted lead"> 
                            <br>Passeios na sua região.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="mb-5 m-md-0">
                          <i class="fas fa-receipt fa-5x text-info"></i><br><br>
                          <h5 class="font-weight-light">Pacotes Completos de Viagens</h5>
                          <p class="my3 text-muted lead">Béto Carrero / Disney / Etc.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="mb-5 m-md-0">
                          <i class="fas fa-passport fa-5x text-info"></i><br><br>
                          <h5 class="font-weight-light">Turismólogos Credênciados</h5>
                          <p class="my3 text-muted lead"> :]</p>
                        </div>
                      </div>
        
          </div>
        </div>
  
      </section>

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
                    <h4>Contato direto</h4>
                    <p>Fale diretamente com o responsavel<br>
                        pelo passeio, possibilitando uma comunicação<br> mais branda e maior transparencia.                      
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
                <p style="color:#696969;"><i class="far fa-envelope fa-2x" style="color: rgb(240, 99, 99)"></i>&nbsp; Email / contato.caioalexei@gmail.com</p>

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
