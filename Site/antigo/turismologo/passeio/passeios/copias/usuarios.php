<?php
 include "../conexao/connc.php";
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
        <link href="../css/usu.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="menu">
    <div class="inmenu">

  
    <form class="form-inline my-2 my-lg-0" method="POST" action="usuarios.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar.." aria-label="Search" name="search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="done"> <i class="fas fa-search" aria-hidden="true"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="fas fa-tag fa-1x" style="color:black;"> </i>&nbsp;&nbsp;
      <select name="modos" class="select-css" size="1">
        <option value="nome">Nome</option>
        <option value="email">Email</option>
        <option value="username">Username</option>
                          
      </select>
    </form>
</div>
</div>


<div class="dificil">

        
            

            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Senha</th>
                    <th>Chave</th>
                    <th>Update</th>
                    <th>Delete</th>
                   
                </tr>

                <?php 
               
                $ata = $_POST['modos'];
                $var = $_POST['search'];
                
                
                if(isset($_POST['done']) && ($var != '')){

                  $modo=1;
                  $q ="SELECT * FROM users WHERE $ata ='$var' ";
                  $query = mysqli_query($con,$q);
                  while($res = mysqli_fetch_array($query)){
  
                  
  
                  
                  ?>
                  
                  <tr class="text-center">
                      <td><?php echo $res['id']; ?></td>
                      <td><?php echo $res['nome']; ?></td>
                      <td><?php echo $res['sobrenome']; ?></td>
                      <td><?php echo $res['email']; ?></td>
                      <td><?php echo $res['username']; ?></td>
                      <td><?php echo $res['senha']; ?></td>
                      <td><?php echo $res['chave']; ?></td>
                      <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                      <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php echo $res['id'];?>">Delete</a></button> </td>
                  </tr>
  
                <?php
                
              
                  }


                  
              
              
              }
              elseif(isset($_POST['done']) && ($var='')){
                $q ="SELECT * FROM users";
                  $query = mysqli_query($con,$q);
                  while($res = mysqli_fetch_array($query)){
  
                  
  
                  
                  ?>
                  
                  <tr class="text-center">
                      <td><?php echo $res['id']; ?></td>
                      <td><?php echo $res['nome']; ?></td>
                      <td><?php echo $res['sobrenome']; ?></td>
                      <td><?php echo $res['email']; ?></td>
                      <td><?php echo $res['username']; ?></td>
                      <td><?php echo $res['senha']; ?></td>
                      <td><?php echo $res['chave']; ?></td>
                      <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                      <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php echo $res['id'];?>">Delete</a></button> </td>
                  </tr>
  
                <?php
                
              
                  }

              }
              

                else{ 


                $q ="SELECT * FROM users";
                $query = mysqli_query($con,$q);
                while($res = mysqli_fetch_array($query)){

                

                
                ?>
                
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['nome']; ?></td>
                    <td><?php echo $res['sobrenome']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['username']; ?></td>
                    <td><?php echo $res['senha']; ?></td>
                    <td><?php echo $res['chave']; ?></td>
                    <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                    <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php echo $res['id'];?>">Delete</a></button> </td>
                </tr>

              <?php
              
            
                }
                }

              ?>

              </table>
        
              </div>
            




    <script src="../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>