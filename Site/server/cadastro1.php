<?php
    
    session_start();
      
    $errors = array();
    
    // conecta no banco de dados
    $db = mysqli_connect('localhost','root','','fasttravel');    

    // caso o botão de login seja ativado

    
    $nome = mysqli_real_escape_string($db,$_POST['nome']);
    $sobrenome = mysqli_real_escape_string($db,$_POST['sobrenome']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password1 = mysqli_real_escape_string($db,$_POST['password1']);
    $password2 = mysqli_real_escape_string($db,$_POST['password2']);
    $chave = 1;

    erros_cadastro();
    cad_to_db();
    
    
 // Funções
 
 // Verifica erros e cadastra-os no Array ($errors).
    function erros_cadastro() {

        global $nome,$sobrenome,$username,$email,$password1,$password2,$errors;

        if (empty($nome)) {
            array_push($errors,"Nome está em branco.");
        };

        if (empty($sobrenome)) {
            array_push($errors,"Sobrenome está em branco.");
        };

        if (empty($username)) {
            array_push($errors,"Username está em branco.");
        };

        if (empty($email)) {
            array_push($errors,"Email está em branco.");
        };

        if (empty($password1)) {
            array_push($errors,"Senha está em branco.");
        };

        if ($password1 != $password2) {
            array_push($errors,"As duas senhas não são iguais.");
        };

        
        
    };

    function cad_to_db() {

        global $db,$nome,$sobrenome,$username,$email,$password1,$password2,$chave,$errors;
        
        if (count($errors) == 0) {
            //encrypt password before storing in database (security)
            
            $sql = "INSERT INTO usuarios_comuns (id,nome_usuario,nome,sobrenome,nome_completo,cpf,endereco,celular,telefone,chave,senha,email,sexo) VALUES ('0','$username','$nome', '$sobrenome','0','0','0','0','0','$chave', '$password1', '$email','0')";
            mysqli_query($db, $sql);
            
            $_SESSION['username']= $username;
            $_SESSION['success']= "You are now logged in";
            header('location: ../login/login.php'); //redirect to home page
        };

        
    };


    
    
?>