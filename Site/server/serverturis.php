<?php

    session_start();

    
    $errors = array();
    



    // conexao com banco de dados
    $db = mysqli_connect('localhost','root','','fasttravel');

    

    // quando o botão de cadastro é clicado

    if (isset($_POST['register'])) {
        
        $image = $_FILES['imagem']['name'];



                
        
        
        $nome = mysqli_real_escape_string($db,$_POST['nome']);
        $sobrenome = mysqli_real_escape_string($db,$_POST['sobrenome']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
        $chave = 1;
        $endereco = mysqli_real_escape_string($db,$_POST['endereco']);
        $celular = mysqli_real_escape_string($db,$_POST['celular']);
        $sexo = mysqli_real_escape_string($db,$_POST['sexo']);
        $cep = mysqli_real_escape_string($db,$_POST['cep']);
        $cpf = mysqli_real_escape_string($db,$_POST['cpf']);
        $data_nasc = mysqli_real_escape_string($db,$_POST['datanasc']);
        $permi=0;
        
        //Erros
       

        if (empty($username)) {
            array_push($errors,"Escreva o nome de Usuário."); //
        }

        if (empty($email)) {
            array_push($errors,"Escreva o seu email."); //
        }

        if (empty($password1)) {
            array_push($errors,"Escreva a sua senha."); //
        }
        
        if (empty($password2)) {
            array_push($errors,"Escreva a confirmação da senha."); //
        }

        if ($password1 != $password2) {
            array_push($errors,"As duas senhas não batem."); //
        }
        
        if (empty($nome)) {
            array_push($errors,"Escreva o nome."); //
        }
        
        if (empty($sobrenome)) {
            array_push($errors,"Escreva o sobrenome"); //
        }
        
        if (empty($endereco)) {
            array_push($errors,"Escreva o endereço."); //
        }
        
        if (empty($celular)) {
            array_push($errors,"Escreva o número de celular."); //
        }
        
        if (empty($cep)) {
            array_push($errors,"Escreva o seu CEP."); //
        }
        
        if (empty($cpf)) {
            array_push($errors,"Escreva o seu CPF."); //
        }
        
        if (empty($sexo)) {
            array_push($errors,"Selecione o seu sexo."); //
        }
        
        if (empty($data_nasc)) {
            array_push($errors,"Escreva a sua data de nascimento."); //
        }

        // Se não houver erros, usuario é cadastrado
        if (count($errors) == 0) {
            // image file directory
            $image = $_FILES['imagem']['name'];
            $target = "../telaturis/imagem_carteira/".basename($image);
            move_uploaded_file($_FILES['imagem']['tmp_name'], $target);  
             
           
            $sql = "INSERT INTO turismologos (id,nome_usuario_tu,senha,nome_tu,sobrenome_tu,nome_completo_tu,endereco,telefone,celular,chave,email,sexo,imagem_perfil,imagem_carteira_tu,cep,cpf,passeios,data_nasc_tu,permi) VALUES ('0','$username', '$password1','$nome', '$sobrenome','0','$endereco','0','$celular','$chave','$email','$sexo','0','$image','$cep','$cpf','0','$data_nasc','$permi')";
            
            

    
            
            mysqli_query($db, $sql);
            $_SESSION['username']= $username;
            $_SESSION['success']= "You are now logged in";
            header('location: ../../turismologo/login/login.php'); //
        }

    }

    //login 
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        
        
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        
        //Erros
       

        if (empty($username)) {
            array_push($errors,"Nome de usuário é requerido."); //
        }

        if (empty($password1)) {
            array_push($errors,"Senha é requerida."); //
        }

        if (count($errors) == 0) {


             
            $query = "SELECT * FROM turismologos WHERE nome_usuario_tu = '$username' AND senha = '$password1'";


            $result = mysqli_query($db, $query);
            $logged_in_user = mysqli_fetch_assoc($result);
            
            
            if (($logged_in_user['nome_usuario_tu'] == $username) && ($logged_in_user['senha'] == $password1) ) {
            
                if ($logged_in_user['chave'] == "1") {
                    
                    session_start();
                    $_SESSION['usuario']= $username;
                    $_SESSION['senha']= $password1;
                    $_SESSION['email']= $logged_in_user['email'];
                    $_SESSION['nome']= $logged_in_user['nome_tu'];
                    $_SESSION['sobrenome']= $logged_in_user['sobrenome_tu'];
                    $_SESSION['nome_completo']= $logged_in_user['nome_completo_tu'];
                    $_SESSION['cpf']= $logged_in_user['cpf'];
                    $_SESSION['endereco']= $logged_in_user['endereco'];
                    $_SESSION['cep']= $logged_in_user['cep'];
                    $_SESSION['estado']= $logged_in_user['estado'];
                    $_SESSION['pais']= $logged_in_user['pais'];
                    $_SESSION['celular']= $logged_in_user['celular'];
                    $_SESSION['telefone']= $logged_in_user['telefone'];
                    $_SESSION['sexo']= $logged_in_user['sexo'];
                    $_SESSION['id1']= $logged_in_user['id'];
                    
                    
                    
                    
                    header('location: ../../turismologo/telaturis/perfilturis.php');
                }
                if ($logged_in_user['chave'] == "0") {
                    
                    session_start();
                    
                    $_SESSION['chave']= $logged_in_user['chave'];

                    $_SESSION['email']= $logged_in_user['email'];
                    $_SESSION['usuario']= $username;
                    $_SESSION['senha']= $password1;
                    $_SESSION['success']= "You are now logged in";
                    
                    header('location: ../admin/index/adminframe.php');
                }


					
          



            }else{
                array_push($errors,"Usuário ou Senha inválidos.");

            }    
        }

    }   
    
   

    // logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>