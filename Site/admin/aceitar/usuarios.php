<?php
 include "../conexao/connc.php";

$results_per_page = 7;
error_reporting(0);
ini_set(“display_errors”, 0 );




// determine the sql LIMIT starting number for the results on the displaying page

// retrieve selected results from database and display them on page

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

  
    <form class="form-inline my-2 my-lg-0" method="GET" action="usuarios.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar.." aria-label="Search" name="search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="done"> <i class="fas fa-search" aria-hidden="true"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="fas fa-tag fa-1x" style="color:black;"> </i>&nbsp;&nbsp;
      <select name="modos" class="select-css" size="1">
        <option value="nome">Nome</option>
        <option value="email">Email</option>
        <option value="nome_usuario">Username</option>
                          
      </select>
    </form>
</div>
</div>


<div class="dificil">

        
            

            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Senha</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Chave</th>
                    <th>Update</th>
                    <th>Delete</th>
                   
                </tr>

                <?php 
                $um = $_GET['um'];


                $pre = $_GET['modos'];
                $search = $_GET['search'];

                if(((isset($_GET['done'])) || ($um>=1)) && ($search != '')){

                  
                  
                  $um=1;
                
                  $sql1="SELECT * FROM turismologos WHERE $pre ='$search' ";
                  $result = mysqli_query($con, $sql1);
                  $number_of_results = mysqli_num_rows($result);                
                  $number_of_pages = ceil($number_of_results/$results_per_page);
                  if (!isset($_GET['page'])) {
                    $page = 1;
                  } else {
                    $page = $_GET['page'];
                  }
                  $this_page_first_result = ($page-1)*$results_per_page;
                
                  $sql="SELECT * FROM turismologos WHERE $pre = '$search' LIMIT  $this_page_first_result , $results_per_page";
                  $pes = mysqli_query($con, $sql);

                

                  
                  while($row = mysqli_fetch_array($pes)) {
                  ?>
                    
                  <tr class="text-center">
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nome_usuario']; ?></td>
                      <td><?php echo $row['senha']; ?></td>
                      <td><?php echo $row['nome']; ?></td>
                      <td><?php echo $row['sobrenome']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['chave']; ?></td>
                      <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                      <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php echo $res['id'];?>">Delete</a></button> </td>
                  </tr>
                  
                  

                <?php
                
               }

               
               
               
              

              
              }


              else{ 
                $sql1="SELECT * FROM usuarios_comuns";
                $result = mysqli_query($con, $sql1);
                $number_of_results = mysqli_num_rows($result);                
                $number_of_pages = ceil($number_of_results/$results_per_page);
                if (!isset($_GET['page'])) {
                  $page = 1;
                }
                 else {
                  $page = $_GET['page'];
                }
                $this_page_first_result = ($page-1)*$results_per_page;
               
                $sql="SELECT * FROM usuarios_comuns LIMIT  $this_page_first_result , $results_per_page";
                $query = mysqli_query($con,$sql);
                while($res = mysqli_fetch_array($query)){

                

                
                ?>
                
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['nome_usuario']; ?></td>
                    <td><?php echo $res['senha']; ?></td>
                    <td><?php echo $res['nome']; ?></td>
                    <td><?php echo $res['sobrenome']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['chave']; ?></td>
                    <td><button class="btn-dark btn " > <a href="operacoes/update.php?id=<?php echo $res['id'];?>">Update</a></button> </td>
                    <td><button class="btn-danger btn" > <a href="operacoes/delete.php?id=<?php 
                    echo $res['id'];?>">Delete</a></button> </td>
                </tr>

              <?php
              
            
                }
                
                }

                
              

              
             
             

               ?>
               </table>

             
             

              
        
              </div>
              <section>
              <div class="fundo">
              <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="usuarios.php?page=1&modos=<?php echo $pre?>&um=<?php echo $um?>&search=<?php echo $search?>">Primeira</a></li>
                      
                      <?php

                        for ($page=1;$page<=$number_of_pages;$page++) { 
                          echo '<li class="page-item"><a class="page-link" href="usuarios.php?page=' . $page . '&modos='.$pre.'&um='.$um.'&search='.$search.'">' . $page . '</a></li> ';
                        }
                        ?>
                      
                      
                      <li class="page-item"><a class="page-link" href="usuarios.php?page=<?php echo $page-1?>&modos=<?php echo $pre?>&um=<?php echo $um?>&search=<?php echo $search?>">Ultima</a></li>
                    </ul>
                  </nav>
              </div>
              </section>
            




    <script src="../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>