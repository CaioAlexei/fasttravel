<?php
include("../../server/conexao/connc.php");
include("../../server/cookie/validacookie.php");
include("../../server/cookie/cookie.php");
include("php/update.php");

?>
<?php
            if (isset($_POST['upload'])) {
                // Get image name
                $image = $_FILES['imagem']['name'];



                // image file directory
                $target = "imagem_perfil/".basename($image);
                move_uploaded_file($_FILES['imagem']['tmp_name'], $target);  

                $sql = "UPDATE usuarios_comuns SET imagem_perfil='$image'  WHERE id='$id'";
                // execute query
                mysqli_query($con, $sql);
                header("location:perfil.php");  


              }
  
            ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast Travel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#cnpj").mask("00.000.000/0000-00")
			
			$("#salario").mask("999.999.990,00", {reverse: true})
			$("#cep").mask("00000-000")
			$("#dataNascimento").mask("00/00/0000")
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
    <link rel="stylesheet" href="usu.css">
    
        
		
       
    
</head>
<body>
    <!---------------Header--------------->


    <section id="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="duty" src="../../Desing/logo2%20.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                
                
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </section>
    
    <section>
        <div class="kk">
        
        
   
       
        
        
            
            <div class="row">
            
    <div class="col-md-4 order-md-2 mb-3">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Perfil</span>
        
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div class="profile-menu">
                 <div class="img-container">
                 <?php
                 
      	             echo "<img src='imagem_perfil/$perfil_img' >";
      	             
                 
                 ?>
                
                    
                </div>
                
                
                <ul>
                    <li class="active">Inicio</li>
                    
                    <li>Passeios Inseridos</li>
                   <li> <a href="php/logout.php">Logout</a></li>
                </ul>
            </div>
          
          
        </li>
        </ul>
        
    </div>
    <div class="col-md-8 order-md-1">
      <h2 class="mb-3">Informações de Usuário</h2>
      <form class="needs-validation" enctype="multipart/form-data" method="post" action="perfil.php">
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control " id="firstName" placeholder="" value="<?php echo"$nome"?>" required="" name="nome">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
              Nome válido é requirido.
            </div>
          </div>
          <div class="col-md-5 mb-3">
              <label for="lastName">Sobrenome</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo"$sobrenome"?>" required="" name="sobrenome">
            <div class="invalid-feedback">
              Sobrenome válido é requirido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Nome de Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo"$usuario"?>" required="" name="usuario">
            <div class="invalid-feedback" style="width: 100%;">
              Nome de usuário é requirido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" value="<?php echo"$email"?>" placeholder="seunome@examplo.com" name="email">
          <div class="invalid-feedback">
            Por favor insira um endereço de email válido.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Endereço Residêncial</label>
          <input type="text" class="form-control" id="address" placeholder="Av, Joaquim Magalhaes, 290, BL 10 AP 201" value="<?php echo"$endereco"?>" required="" name="endereco">
          <div class="invalid-feedback">
            Por favor insira o seu endereço.
          </div>
          <div class="valid-feedback">
                Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Telefone <span class="text-muted">(Celular)</span></label>
          <input type="text" class="form-control" id="celular" name="celular" value="<?php echo"$celular"?>" placeholder="(xx)xxxxx-xxxx">
        </div>

        
          
          <div class="col-md-3 mb-3">
            <label for="cep">CEP</label>
            <input type="text"  class="form-control" id="cep" name="cep" value="<?php echo $cep;?>" placeholder="" maxlength="">
            <div class="invalid-feedback">
              CEP é requirido.
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <label for="cep">CPF</label>
            <input type="text"  class="form-control" id="cpf" name="cpf" value="<?php echo $cpf;?>" placeholder="" maxlength="">
            <div class="invalid-feedback">
              CEP é requirido.
            </div>
          </div>

            
            <div class="row">
                
            <div class="col">
                <form enctype="multipart/form-data"  method="post" action="perfil.php">
            <label for="firstName">Foto de Usuário</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="imagem">
                    <label class="custom-file-label" for="inputGroupFile04">Escolha seu arquivo...</label>
                      
                  </div>
                    
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" name="upload">Enviar</button>
                  </div>
                </div>
                </form>
          </div>
            
            
            <div  class="col">
                <h6> Salvar Configurações:</h6>
            <button type="submit" class="btn btn-primary btn-lg mb-3" name="ok">Salvar</button>
            </div>
                
            
            
 
        </div>
        </form>
        </div>
        </div>
        
            
        
        
    
            
    
    </div>
    </section>
   

   



    
    
    
    
    
    
    <!-- Optional JavaScript -->
        
		
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
   
</body>
</html>

