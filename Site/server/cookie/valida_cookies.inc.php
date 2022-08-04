<?php

if(IsSet($_SESSION['nome_usuario']))
  $nome_usuario=$_SESSION['nome_usuario'];
if(IsSet($_SESSION['senha_usuario']))
  $senha_usuario=$_SESSION['senha_usuario'];

if(!(empty($nome_usuario) OR empty ($senha_usuario)))
{
 include "conecta_mysql3.inc.php";
 $resultado=mysql_query("SELECT * FROM usuarios WHERE login='$nome_usuario'");
 if (mysql_num_rows($resultado)==1)
 {
    if($senha_usuario != mysql_result($resultado, 0, "senha"))
        {
         unset ($_SESSION['nome_usuario']);
         unset ($_SESSION['senha_usuario']);
         echo "Você não efetuou o Login!A";
         exit;
         }
 }
    else
         {
         unset ($_SESSION['nome_usuario']);
         unset ($_SESSION['senha_usuario']);
         echo "Voce não efetuou o Login!B";
         exit;
         }
 }
         else
         {
         echo "Você não efetuou o LoginC!<br />";
         echo"<a href='login.php'>Efetuar Login</a> <br />";
         echo"<a href='index.html'>Voltar para pagina incial</a>";
         exit;
         }
         mysql_close($conexao);
         ?>
 
