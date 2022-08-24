<?php
    $db = new MySQLi('localhost', 'root', '', 'fasttravel');
    session_start();
    $name=$_SESSION['usuario'];
    if(isset($name))
    {
        $result=mysqli_query($db, "SELECT id FROM usuarios_comuns");
        $row=mysqli_num_rows($result);
        
        echo "<div class=''>";
        echo "<h3><br> Welcome to admin panel</h3>";
        echo "total resgiter user".$row;
        echo "</br></br>";
    };
?>