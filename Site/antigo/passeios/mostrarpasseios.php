<?php 
include("../server/conexao/connc.php");

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;


$result_passeio = "SELECT * FROM passeios";
$resultado_passeio = mysqli_query($con, $result_passeio);


$total_passeio = mysqli_num_rows($resultado_passeio);


$quantidade_pg = 3;


$num_pagina = ceil($total_passeio/$quantidade_pg);


$incio = ($quantidade_pg*$pagina)-$quantidade_pg;


$result_passeio = "SELECT * FROM passeios limit $incio, $quantidade_pg";
$resultado_passeio = mysqli_query($con, $result_passeio);
$total_passeio = mysqli_num_rows($resultado_passeio);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
        <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
		<link href="../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	</head>
	<body>
        
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
                  <a class="nav-link" href="../login/login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../cadastro/cadastro.php">Cadastro</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../turismologo/inde.php">Turismólogo</a>
                </li>
                  
                 
                  <li class="nav-item">
                  <a class="nav-link" href="mostrarpasseios.php">Passeios</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </section>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Passeios</h1>
			</div>
			<div class="row">
				<?php while($rows_passeio = mysqli_fetch_assoc($resultado_passeio)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="../turismologo/passeio/cadastro/imagens/<?php echo $rows_passeio['imagem_passeio']; ?>" alt="...">
							<div class="caption text-center">
                               
								<a href="detalhes.php?id_passeio=<?php echo $rows_passeio['id_passeio']; ?>"><h3><?php echo $rows_passeio['titulo']; ?></h3></a>
                                 <p class="text-justify"><?php echo $rows_passeio['descricao']; ?></p>
								<p><a href="#" class="btn btn-primary" role="button">Inscrever-se</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="mostrarpasseios.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="mostrarpasseios.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="mostrarpasseios.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</body>
</html>