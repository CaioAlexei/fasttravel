<?php

//Acesso ao Banco de Dados

$db = new MySQLi('localhost', 'root', '', 'fasttravel');

//

//Se button 'login' for pressionado

$errors = array();
    
    if (isset($_POST['login'])) {
        

        

        

        $username = mysqli_real_escape_string($db,$_POST['username']);        
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        echo $username."<br>";
        echo $password1;

        erros_login();

        if((count($errors)) == 0) {
        
            $query = "SELECT * FROM usuarios_comuns WHERE nome_usuario = '$username' AND senha = '$password1'";
            $result = mysqli_query($db, $query);
            $logged_in_user = mysqli_fetch_assoc($result);
        
            
            login_fun();
        };

           


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

    function login_fun() {

        global $nome,$sobrenome,$username,$email,$password1,$password2,$errors,$logged_in_user;                
        
        if (($logged_in_user['nome_usuario'] == $username) && ($logged_in_user['senha'] == $password1) ) {
        
            if ($logged_in_user['chave'] == "1") {

                return session_chave1();

            };
            if ($logged_in_user['chave'] == "0") {

                return session_chave0();
                        
            };

        }
        
        else{

            return array_push($errors,"Wrong username/password combination");

        }

    };


    // Verifica inputs inválidos

    
    function erros_login() {
        global $username, $password1, $errors;

        if (empty($username)) {
            array_push($errors,"Username is required"); //add errror to erros array
        };

        if (empty($password1)) {
            array_push($errors,"Password is required"); //add errror to erros array
        };
    };


    // Camada de acesso Usuário_Comum - (1)
    
    function session_chave1() {

        global $username,$password1,$logged_in_user;

        session_start();

        $_SESSION['nome_usuario']= $username;
        $_SESSION['senha']= $password1;
        $_SESSION['email']= $logged_in_user['email'];
        $_SESSION['nome']= $logged_in_user['nome'];
        $_SESSION['sobrenome']= $logged_in_user['sobrenome'];
        //$_SESSION['nome_completo']= $logged_in_user['nome_completo'];
        $_SESSION['cpf']= $logged_in_user['cpf'];
        //$_SESSION['endereco']= $logged_in_user['endereco'];
        $_SESSION['cep']= $logged_in_user['cep'];
        //$_SESSION['estado']= $logged_in_user['estado'];
        //$_SESSION['pais']= $logged_in_user['pais'];
        //$_SESSION['celular']= $logged_in_user['celular'];
        $_SESSION['celular']= $logged_in_user['celular'];
        //$_SESSION['sexo']= $logged_in_user['sexo'];
        $_SESSION['id']= $logged_in_user['id'];
        $_SESSION['sit']= "Logado";

        header('location: ../index.php');

    };

    //Camada de Acesso Administrador - (0)

    function session_chave0() {

        global $logged_in_user, $username, $password1;  

        session_start();

        $_SESSION['chave']= $logged_in_user['chave'];
        $_SESSION['email']= $logged_in_user['email'];
        $_SESSION['usuario']= $username;
        $_SESSION['senha']= $password1;
        $_SESSION['success']= "You are now logged in";
        
        header('location: admin/admin_frame.php');
    };
?>