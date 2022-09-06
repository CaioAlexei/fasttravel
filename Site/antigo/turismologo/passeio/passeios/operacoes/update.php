<?php 

include "../../conexao/connc.php";

if(isset($_POST['done'])){
    
    $image = $_FILES['imagem']['name'];



    // image file directory
    $target = "../../cadastro/imagens/".basename($image);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $target);  

                
    


    $id=$_GET['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $local = $_POST['local'];
    $imagem = $_POST['imagem'];
    $q="UPDATE passeios SET  titulo='$titulo', descricao='$descricao', data='$data', local ='$local', imagem_passeio='$image'  WHERE id_passeio='$id'";


    $query = mysqli_query($con,$q);

    header('location:../passeiotu.php');


}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#cnpj").mask("00.000.000/0000-00")
			
			$("#salario").mask("999.999.990,00", {reverse: true})
			$("#cep").mask("00000-000")
			$("#data").mask("00/00/0000")
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
        <link rel="stylesheet" href="../../../../../node_modules/bootstrap/compiler/bootstrap.css">
        <link href="../../../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="../admin/admin.css" type="text/css" rel="stylesheet">
</head>
<body>


    <div class="col-lg-6 m-auto">
        <form method="post" enctype="multipart/form-data">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                <h1 class="text-white text-center"> Atualizar </h1>
                </div><br>
            

                <label> Título: </label>
                <input type="text" name="titulo" class="form-control" enctype="multipart/form-data"><br>

                <label> Descrição: </label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea><br>
                
            
                <label> Data: </label>
                <input type="text" name="data" id="data" class="form-control"><br>

                <label> Local: </label>
                <input type="text" name="local" class="form-control"><br>
            
                <label> Imagem: </label>
               <input type="file" name="imagem"><br>
            <button class="btn btn-success" type="submit" name="done">
                    Submit </button><br>


            </div>

        </form>
    </div>
    
    <script src="../../../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>