<?php

include "../../conexao/connc.php";

$id =$_GET['id'];

$q = "DELETE FROM passeios WHERE id_passeio = $id";

mysqli_query($con,$q);

header('location:../passeiotu.php');
?>