
<?php include("../server/conexao/connc.php");
$id_passeio = $_GET['id_passeio'];
$result_passeio = "SELECT * FROM passeios WHERE id_passeio='$id_passeio'";
$resultado_passeio = mysqli_query($con, $result_passeio);
$row_passeio = mysqli_fetch_assoc($resultado_passeio);
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
				<h1><?php echo $row_passeio['titulo']; ?></h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  

			  <!-- Tab panes -->
			  <div class=""><br>
                  <h3>Descrição</h3>
				<div role="" class="" id="home"><br>
					<?php echo $row_passeio['descricao']; ?><br>
				</div>
                  <h3>Data</h3>
				<div role="" class="" id=""><br>
					<?php echo $row_passeio['data']; ?><br>
				</div>
                  <h3>Local</h3>
				<div role="" class="" id=""><br>
					<?php echo $row_passeio['local']; ?><br>
				</div>
				
			  </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="mostrarpasseios.php">Voltar</a></button>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</body>
</html>