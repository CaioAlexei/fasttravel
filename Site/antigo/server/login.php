<?



    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        
        
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        
        //ensure that form fields are filled properly
    

        if (empty($username)) {
            array_push($errors,"Username is required"); //add errror to erros array
        }

        if (empty($password1)) {
            array_push($errors,"Password is required"); //add errror to erros array
        }

        if (count($errors) == 0) {


            //encrypt password before comparing
            $query = "SELECT * FROM usuarios_comuns WHERE nome_usuario = '$username' AND senha = '$password1'";


            $result = mysqli_query($db, $query);
            $logged_in_user = mysqli_fetch_assoc($result);
            
            
            if (($logged_in_user['nome_usuario'] == $username) && ($logged_in_user['senha'] == $password1) ) {
            
                if ($logged_in_user['chave'] == "1") {
                    
                    session_start();
                    $_SESSION['usuario']= $username;
                    $_SESSION['senha']= $password1;
                    $_SESSION['email']= $logged_in_user['email'];
                    $_SESSION['nome']= $logged_in_user['nome'];
                    $_SESSION['sobrenome']= $logged_in_user['sobrenome'];
                    $_SESSION['nome_completo']= $logged_in_user['nome_completo'];
                    $_SESSION['cpf']= $logged_in_user['cpf'];
                    $_SESSION['endereco']= $logged_in_user['endereco'];
                    $_SESSION['cep']= $logged_in_user['cep'];
                    $_SESSION['estado']= $logged_in_user['estado'];
                    $_SESSION['pais']= $logged_in_user['pais'];
                    $_SESSION['celular']= $logged_in_user['celular'];
                    $_SESSION['telefone']= $logged_in_user['telefone'];
                    $_SESSION['sexo']= $logged_in_user['sexo'];
                    $_SESSION['id']= $logged_in_user['id'];
                    
                    
                    
                    $_SESSION['success']= "You are now logged in";
                    header('location: ../usuario/tela usuario/perfil.php');
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
                array_push($errors,"Wrong username/password combination");

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