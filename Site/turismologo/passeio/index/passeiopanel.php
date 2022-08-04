<?php
 include "../conexao/connc.php";
 //include("../../server/cookie/validacookieadm.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<base target="panel">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../../../node_modules/bootstrap/compiler/bootstrap.css">
        <link href="../../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="container">
        <nav>
            <div id="logo">
                Passeio <span>P a n e l</span>
            </div>
            <ul id="menu">
                
                <li><a href="../passeios/passeiotu.php">Meus Passeios</a></li>
                <li><a href="../cadastro/cadastro.php">Cadastrar Passeio</a></li>
                <li><a target="_top" href="logout.php">Logout</a></li>
                
            </ul>
        </nav>
        
        

    </div>

    




    <script src="index.js"></script>
    <script src="../../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>