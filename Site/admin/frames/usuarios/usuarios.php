<?php
 session_start();
 $con = new MySQLi('localhost', 'root', '', 'fasttravel');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1e3a3bae57.js" crossorigin="anonymous"></script>
  <title>Fast Travel</title>       

  <link href="../css/usu.css" type="text/css" rel="stylesheet">
</head>
<body style="background-color: #B0E0E6;">
  <div class="menu">
    <div class="inmenu">

  
    <form class="form-inline my-2 my-lg-0" method="POST" action="usuarios.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar.." aria-label="Search" name="search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="done"> <i class="fas fa-search" aria-hidden="true"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="fas fa-tag fa-1x" style="color:black;"> </i>&nbsp;&nbsp;
      <select name="modos" class="select-css" size="1">
        <option value="nome">Nome</option>
        <option value="email">Email</option>
        <option value="nome_usuario">nome_usuario</option>
                          
      </select>
    </form>
</div>
</div>


<div class="dificil">
            <style type="text/css">
                    .table-bordered td, .table-bordered th {
                      border: 1px solid black;
                    }
                    
            </style>

        
            

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
                  $q ="SELECT * FROM usuarios_comuns WHERE $ata ='$var' ";
                  $query = mysqli_query($con,$q);
                  while($res = mysqli_fetch_array($query)){
  
                  
  
                  
                  ?>
                  
                  <tr class="text-center">
                      <td><?php echo $res['id']; ?></td>
                      <td><?php echo $res['nome']; ?></td>
                      <td><?php echo $res['sobrenome']; ?></td>
                      <td><?php echo $res['email']; ?></td>
                      <td><?php echo $res['nome_usuario']; ?></td>
                      <td><?php echo $res['senha']; ?></td>
                      <td><?php echo $res['chave']; ?></td>
                      <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                      <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php echo $res['id'];?>">Delete</a></button> </td>
                  </tr>
  
                <?php
                
              
                  }


                  
              
              
              }
              elseif(isset($_POST['done']) && ($var='')){
                $q ="SELECT * FROM usuarios_comuns";
                  $query = mysqli_query($con,$q);
                  while($res = mysqli_fetch_array($query)){
  
                  
  
                  
                  ?>
                  
                  <tr class="text-center">
                      <td><?php echo $res['id']; ?></td>
                      <td><?php echo $res['nome']; ?></td>
                      <td><?php echo $res['sobrenome']; ?></td>
                      <td><?php echo $res['email']; ?></td>
                      <td><?php echo $res['nome_usuario']; ?></td>
                      <td><?php echo $res['senha']; ?></td>
                      <td><?php echo $res['chave']; ?></td>
                      <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                      <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php echo $res['id'];?>">Delete</a></button> </td>
                  </tr>
  
                <?php
                
              
                  }

              }
              

                else{ 


                $q ="SELECT * FROM usuarios_comuns";
                $query = mysqli_query($con,$q);
                while($res = mysqli_fetch_array($query)){

                

                
                ?>
                
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['nome']; ?></td>
                    <td><?php echo $res['sobrenome']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['nome_usuario']; ?></td>
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
            




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>