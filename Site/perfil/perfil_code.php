<?php

//Acesso ao Banco de Dados

$db = new MySQLi('localhost', 'root', '', 'fasttravel');

//

//Se button 'login' for pressionado

$errors = array();
    
if (isset($_POST['salvar'])) {
    
    $id = $_SESSION['id'];
    $nome = mysqli_real_escape_string($db,$_POST['nome']);
    $sobrenome = mysqli_real_escape_string($db,$_POST['sobrenome']);
    $email = mysqli_real_escape_string($db,$_POST['email1']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $cpf = mysqli_real_escape_string($db,$_POST['cpf']);
    $cep = mysqli_real_escape_string($db,$_POST['cep']);
    $telefone = mysqli_real_escape_string($db,$_POST['tel']); 
    
    $query = "UPDATE usuarios_comuns SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', nome_usuario = '$username', cpf = $cpf, celular = $telefone  WHERE id = 7";
    $result = mysqli_query($db, $query);
    
    $query = "SELECT * FROM usuarios_comuns WHERE id = $id";
    $result = mysqli_query($db, $query);
    $logged_in_user = mysqli_fetch_assoc($result);

    session__updater();
    
};

//


// logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    };

//

    

// Funções de Factory


    // Verica a Chave de Camada & Autenticidade das Senhas

    
       


    // Verifica inputs inválidos

    
    function erros_perfil() {
        global $username, $password1, $errors;

        if (empty($username)) {
            array_push($errors,"Username is required"); //add errror to erros array
        };

        if (empty($name)) {
            array_push($errors,"Password is required"); //add errror to erros array
        };
    };


    // Camada de acesso Usuário_Comum - (1)
    
    function session__updater() {

        global $logged_in_user;

        $_SESSION['nome_usuario']= $logged_in_user['nome_usuario'];
        $_SESSION['email']= $logged_in_user['email'];
        $_SESSION['nome']= $logged_in_user['nome'];
        $_SESSION['sobrenome']= $logged_in_user['sobrenome'];
        $_SESSION['cpf']= $logged_in_user['cpf'];
        $_SESSION['cep']= $logged_in_user['cep'];
        $_SESSION['pais']= $logged_in_user['pais'];
        $_SESSION['celular']= $logged_in_user['celular'];        
        $_SESSION['sit']= "Logado";

        header('location: perfil.php');

    };

    
?>
