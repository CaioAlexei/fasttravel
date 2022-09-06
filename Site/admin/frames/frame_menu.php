<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background: #008B8B;">


    <div class="container-fluid">
        <h2>Admin Panel</h2>
        <p>Bem Vindo Admin: <?php echo $_SESSION['usuario'];?> ! </p>
    </div>
    <br>
    <div class="container-fluid" style="text-align: center;">
        <h3>Menu</h3>
        <style type="text/css">
        .list-group-item{             
            border: 1px solid black;
            background-color: #5F9EA0;
            color: black;
            text-align: center;            
        }
        .list-group-item:hover{
            background-color: black;
            color: white;           
        }
        </style>
        <div class="list-group">            
            <a href="usuarios/usuarios.php" target="frame_tela" class="list-group-item list-group-item-action">Usuários</a>
            <a href="#" class="list-group-item list-group-item-action">Relatórios</a>
            <a href="#" class="list-group-item list-group-item-action">oi</a>
            <a href="#" class="list-group-item list-group-item-action">oi</a>
            <a href="#" class="list-group-item list-group-item-action">Amigo</a>
        </div>        
    </div>
    <br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>