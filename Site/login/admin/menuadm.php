<?php

    include("../../server/server.php");
    session_start();
    $name=$_SESSION['name'];
    if(isset($name))
    {
        $result=mysqli_query($con, "SELECT firstname, lastname, mail, dob, img FROM users");
        $row=mysqli_num-rows($result);
        
        echo "<div class=''>";
        echo "<h3><br> Welcome to admin panel</h3>";
        echo "total resgiter user".$row;
        echo "</br></br>"
    }
?>