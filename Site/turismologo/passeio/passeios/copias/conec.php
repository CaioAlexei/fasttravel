<?php 

$hostname_conexao = "localhost";
$database_conexao = "teste1";
$username_conexao = "root";
$password_conexao = "";

$mysqli = new mysqli($hostname_conexao, $username_conexao , $password_conexao, $database_conexao);

if($mysqli->connect_errno){
    echo "Failed to coneect to MYsql: (" . $mysqli->conect_errno. ")" . $mysql->connect_error;

}




?>