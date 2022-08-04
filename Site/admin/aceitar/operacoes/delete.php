<?php

include "../../conexao/connc.php";

$id =$_GET['id'];

$q = "DELETE FROM usuarios_comuns WHERE id = $id";

mysqli_query($con,$q);

header('location:../usuarios.php');
?>