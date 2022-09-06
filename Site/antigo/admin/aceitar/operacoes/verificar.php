<?php 

include "../../conexao/connc.php";
$id=$_GET['id'];
$query = "SELECT * FROM turismologos WHERE id = '$id'";
$q=2;

$result = mysqli_query($con, $query);
$logged_in_user = mysqli_fetch_assoc($result);

$perfil_cart=$logged_in_user['imagem_carteira_tu'];

if(isset($_POST['done'])){


    
    $ok=1;
    $q="UPDATE turismologos SET permi ='$ok'  WHERE id='$id'";


    $query = mysqli_query($con,$q);

    header('location:../aceitar.php');


}

if(isset($_POST['done'])){


    
    

    header('location:../aceitar.php');


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
        <link rel="stylesheet" href="../../../../node_modules/bootstrap/compiler/bootstrap.css">
        <link href="../../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="../../css/aceitar.css" type="text/css" rel="stylesheet">
</head>
<body>


    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                <h1 class="text-white text-center"> Verificação </h1>
                </div><br>
                 <?php echo"$perfil_cart";?>
                 <img src='../../../turismologo/telaturis/imagem_carteira/<?php echo"$perfil_cart"; ?>'>
        
                
            
                
                

                <button class="btn btn-success" type="submit" name="done">
                    Aceitar </button><br>
            
                <button class="btn btn-success" type="submit" name="delete">
                    Recusar </button><br>



            </div>

        </form>
    </div>
    <script src="../../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>