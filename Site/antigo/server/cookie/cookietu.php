<?php

session_start();
if(IsSet($_SESSION['id1']))
  $id=$_SESSION['id1'];
//if(IsSet($_SESSION['usuario']))
 // $usuario=$_SESSION['usuario'];
//if(IsSet($_SESSION['email']))
//  $email=$_SESSION['email'];
//if(IsSet($_SESSION['nome']))
  //$nome=$_SESSION['nome'];
//if(IsSet($_SESSION['sobrenome']))
  //$sobrenome=$_SESSION['sobrenome'];
//if(IsSet($_SESSION['nome_completo']))
 // $nome_completo=$_SESSION['nome_completo'];
//if(IsSet($_SESSION['cpf']))
//  $cpf=$_SESSION['cpf'];
//if(IsSet($_SESSION['endereco']))
//  $endereco=$_SESSION['endereco'];
//if(IsSet($_SESSION['cep']))
//  $cep=$_SESSION['cep'];
//if(IsSet($_SESSION['estado']))
//  $estado=$_SESSION['estado'];
//if(IsSet($_SESSION['celular']))
//  $celular=$_SESSION['celular'];
//if(IsSet($_SESSION['telefone']))
//  $telefone=$_SESSION['telefone'];
//if(IsSet($_SESSION['sexo']))
//  $sexo=$_SESSION['sexo'];

$query = "SELECT * FROM turismologos WHERE id = '$id'";
$q=2;

$result = mysqli_query($con, $query);
$logged_in_user = mysqli_fetch_assoc($result);


  $id=$logged_in_user['id'];

  $usuario=$logged_in_user['nome_usuario_tu'];

  $email=$logged_in_user['email'];

  $nome=$logged_in_user['nome_tu'];

  $sobrenome=$logged_in_user['sobrenome_tu'];

  $nome_completo=$logged_in_user['nome_completo_tu'];

  $cpf=$logged_in_user['cpf'];

  $endereco=$logged_in_user['endereco'];

  $cep=$logged_in_user['cep'];

  //$estado=$logged_in_user['estado'];

  $celular=$logged_in_user['celular'];

  $telefone=$logged_in_user['telefone'];

  $sexo=$logged_in_user['sexo'];
  
  $perfil_img=$logged_in_user['imagem_perfil'];

  $permi_tu=$logged_in_user['permi'];    




?>