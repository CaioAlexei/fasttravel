<?php
include("../../server/conexao/connc.php");
include("../../server/cookie/validacookie.php");
include("../../server/cookie/cookie.php");
include("php/update.php");

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
            
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Perfil</span>
        
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div class="profile-menu">
                <div class="img-container">
                    <img src="tiozao.jpg" alt="">
                </div>
                
                
                <ul>
                    <li class="active">Inicio</li>
                    <li>Informações Pessoais</li>
                   <li> <a href="logout.php">Logout</a></li>
                </ul>
            </div>
          
          
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h2 class="mb-3">Informações de Usuário</h2>
      <form class="needs-validation" novalidate="" method="post" action="perfil.php">
        <div class="row">
          <div class="col">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control " id="firstName" placeholder="" value="<?php echo"$nome"?>" required="" name="nome">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
              Nome válido é requirido.
            </div>
          </div>
          <div class="col">
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
          <input type="text" class="form-control" id="address" placeholder="Av, Joaquim Magalhaes, 290, BL 10 AP 201" required="">
          <div class="invalid-feedback">
            Por favor insira o seu endereço.
          </div>
          <div class="valid-feedback">
                Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Telefone <span class="text-muted">(Celular)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="(xx)xxxxx-xxxx">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">País</label>
            <select class="custom-select d-block w-100" id="country" required="">
              
              <option value="">Brasil</option>
            </select>
            <div class="invalid-feedback">
              Por favor insira um país valido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" id="state" required="">
              
              <option value="">Rio de Janeiro</option>
            </select>
            <div class="invalid-feedback">
              Por favor insira um estado valido.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" value="<?php echo $cep;?>" placeholder="00000-00" maxlength="9">
            <div class="invalid-feedback">
              CEP é requirido.
            </div>
          </div>
            <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2" name="ok">Salvar</button>
            </div>
 
        </div>
        </form>
        </div>
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

