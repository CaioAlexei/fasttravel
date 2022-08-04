<?php
    session_start();
        
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost','root','','fasttravel');    

    // if the register button is clicked

    if (isset($_POST['register'])) {
        $nome = mysqli_real_escape_string($db,$_POST['nome']);
        $sobrenome = mysqli_real_escape_string($db,$_POST['sobrenome']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
        $chave = 1;
        
        //ensure that form fields are filled properly
    

        if (empty($username)) {
            array_push($errors,"Username is required"); //add errror to erros array
        }

        if (empty($email)) {
            array_push($errors,"Email is required"); //add errror to erros array
        }

        if (empty($password1)) {
            array_push($errors,"Password is required"); //add errror to erros array
        }

        if ($password1 != $password2) {
            array_push($errors,"The two passwords do not match"); //add errror to erros array
        }

        // if the are no erros, save user to database
        if (count($errors) == 0) {
            //encrypt password before storing in database (security)
            
            $sql = "INSERT INTO usuarios_comuns (id,nome_usuario,nome,sobrenome,nome_completo,cpf,endereco,celular,telefone,chave,senha,email,sexo) VALUES ('0','$username','$nome', '$sobrenome','0','0','0','0','0','$chave', '$password1', '$email','0')";
            mysqli_query($db, $sql);
            
            $_SESSION['username']= $username;
            $_SESSION['success']= "You are now logged in";
            header('location: ../login/login.php'); //redirect to home page
        }

    }
?>