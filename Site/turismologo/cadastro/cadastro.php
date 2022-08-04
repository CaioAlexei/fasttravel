<?php
    include('../../server/serverturis.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast Travel</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#cnpj").mask("00.000.000/0000-00")
			
			$("#salario").mask("999.999.990,00", {reverse: true})
			$("#cep").mask("00000-000")
			$("#datanasc").mask("00/00/0000")
            $("celular").mask("(00) 00000-0000")
			
			$("#rg").mask("999.999.999-W", {
				translation: {
					'W': {
						pattern: /[X0-9]/
					}
				},
				reverse: true
			})
			
			var options = {
				translation: {
					'A': {pattern: /[A-Z]/},
					'a': {pattern: /[a-zA-Z]/},
					'S': {pattern: /[a-zA-Z0-9]/},
					'L': {pattern: /[a-z]/},
				}
			}
			
			$("#placa").mask("AAA-0000", options)
			
			$("#codigo").mask("AA.LLL.0000", options)
			
			$("#celular").mask("(00) 00000-0000")
			
			$("#celular").blur(function(event){
				if ($(this).val().length == 15){
					$("#celular").mask("(00) 000000-0000")
				}else{
					$("#celular").mask("(00) 00000-0000")
				}
			})
		})
		</script>
    
    <link rel="stylesheet" href="../../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="cad.css">
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
                  <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
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
                  <a class="nav-link" href="../login/login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro.php">Cadastrar</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../inde.php">Turismólogo</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0" method="post" action="../../passeios/passeios.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

    </section>

    <section id="welcome">
      <div class="container">
        
          <div class="welcome text-left">
            <h1>Cadastro - Turismólogo</h1>
            <form method="post" enctype="multipart/form-data" action="cadastro.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuário</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome de Usuário" name="username">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Nome" name="nome">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sobrenome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Sobrenome" name="sobrenome">
                    
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" name="email">
               <!-- <small id="emailHelp" class="form-text text-muted">KKKKKKK</small> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" name="password1">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Confirmar Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite novamente sua senha" name="password2">
                </div>
                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control"  placeholder="000.000.000-00" id="cpf" name="cpf">
                </div>
                <div class="form-group">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control"  placeholder="00000-000" id="cep" name="cep">
                </div>
                <div class="form-group">
                  <label for="datanasc">Data de Nascimento</label>
                  <input type="text" class="form-control"  placeholder="DD/MM/AAAA" id="datanasc" name="datanasc">
                </div>
                
                <div class="form-group">
                  <label for="endereco">Endereço</label>
                  <input type="text" class="form-control"  placeholder="Escreva seu Endereço" id="endereco" name="endereco">
                </div>
                
                <div class="form-group">
                  <label for="celular">Celular</label>
                  <input type="text" class="form-control"  placeholder="(00) 00000-0000" id="celular" name="celular">
                </div>
              <label for="sexo">Sexo</label><br>
              <select name='sexo' id="sexo">
     <option value='masculino'>Masculino</option>
     <option value='feminino'>Feminino</option>
                  
                    <input type="file"  name="imagem">
                    
                      
                  
     
     </select>&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-dark" name="register">Cadastrar</button> 
                
                <?php 

                        include('../../server/erro/errors.php');



                        ?>
            </form>
          </div>
      </div>
  </section>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>