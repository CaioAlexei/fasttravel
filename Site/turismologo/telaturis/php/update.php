<?php

if(isset($_POST['ok'])){
    $nome1 = $_POST['nome'];
    $sobrenome1 = $_POST['sobrenome'];
    $email1 = $_POST['email'];
    $usuario1 = $_POST['usuario'];
    $celular1= $_POST['celular'];
    $endereco1= $_POST['endereco'];  
    $cep1= $_POST['cep'];
    $cpf1= $_POST['cpf'];
    
    
        

//$q="UPDATE `usuarios_comuns` SET `id`=[0],`nome_usuario`=['$usuario1'],`nome`=['$nome1'],`sobrenome`=['$sobrenome1'],`nome_completo`=['$nome_completo1'],`cpf`=['$cpf1'],`endereco`=['$endereco1'],`celular`=['$celular1'],`telefone`=['$telefone1'],`chave`=[0],`senha`=['0'],`email`=['$email1'],`sexo`=['$sexo'] WHERE id='$id1'"; //UPDATE `usuarios_comuns` SET `id`=[value-1],`nome_usuario`=[value-2],`nome`=[value-3],`sobrenome`=[value-4],`nome_completo`=[value-5],`cpf`=[value-6],`endereco`=[value-7],`celular`=[value-8],`telefone`=[value-9],`chave`=[value-10],`senha`=[value-11],`email`=[value-12],`sexo`=[value-13] WHERE 1

    $q="UPDATE turismologos SET id='$id', nome_usuario_tu='$usuario1', nome_tu='$nome1',sobrenome_tu='$sobrenome1', cpf='$cpf1' ,endereco='$endereco1',celular='$celular1',email='$email1', cep='$cep1'  WHERE id='$id'";
//$q="UPDATE usuarios_comuns SET nome_usuario='$usuario1', nome='$nome1',sobrenome='$sobrenome1',email='$email1' ,  WHERE id='$id'";


$query = mysqli_query($con,$q);

header("Location:perfilturis.php");    
}


?>

