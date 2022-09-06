<?php 

include "../conexao/connc.php";

if(isset($_POST['done'])){
    $modo=$_POST['niv'];
    
    if($modo=="adm"){
        $id=$_GET['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $chave=0;
        $q="INSERT INTO usuarios_comuns (id,nome_usuario,nome,sobrenome,nome_completo,cpf,endereco,celular,telefone,chave,senha,email,sexo) VALUES ('0','$username','$nome', '$sobrenome','0','0','0','0','0','$chave', '$password', '$email','0')"; //$sql = "INSERT INTO usuarios_comuns (id,nome_usuario,nome,sobrenome,nome_completo,cpf,endereco,celular,telefone,chave,senha,email,sexo) VALUES ('0','$username','$nome', '$sobrenome','0','0','0','0','0','$chave', '$password1', '$email','0')";
        


        $query = mysqli_query($con,$q);

        header('location:../usuarios/usuarios.php');
        
    }
    elseif($modo=="usu"){
        $id=$_GET['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $chave=1;
        $q="INSERT INTO usuarios_comuns (id,nome_usuario,nome,sobrenome,nome_completo,cpf,endereco,celular,telefone,chave,senha,email,sexo) VALUES ('0','$username','$nome', '$sobrenome','0','0','0','0','0','$chave', '$password', '$email','0')"; //$sql = "INSERT INTO usuarios_comuns (id,nome_usuario,nome,sobrenome,nome_completo,cpf,endereco,celular,telefone,chave,senha,email,sexo) VALUES ('0','$username','$nome', '$sobrenome','0','0','0','0','0','$chave', '$password1', '$email','0')";
        $query = mysqli_query($con,$q);

        header('location:../usuarios/usuarios.php');
    }
    


    


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
        <link rel="stylesheet" href="../../../node_modules/bootstrap/compiler/bootstrap.css">
        <link href="../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="../admin/admin.css" type="text/css" rel="stylesheet">
</head>
<body>


    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                <h1 class="text-white text-center"> Cadastro Manual </h1>
                </div><br>

                <label> Username: </label>
                <input type="text" name="username" class="form-control"><br>

                <label> Password: </label>
                <input type="text" name="password" class="form-control"><br>
                
            
                <label> Nome: </label>
                <input type="text" name="nome" class="form-control"><br>

                <label> Sobrenome: </label>
                <input type="text" name="sobrenome" class="form-control"><br>
            
                <label> Email: </label>
                <input type="text" name="email" class="form-control"><br>
            
               
                <p>
                 ADM: <input type="radio" name="niv" value="adm" />
                 Usuario: <input type="radio" name="niv" value="usu" />
                </p>
            
            

                
            
            
                
            
            
            
            
            
            

                <button class="btn btn-success" type="submit" name="done">
                    Submit </button><br>



            </div>

        </form>
    </div>
    <script src="../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>