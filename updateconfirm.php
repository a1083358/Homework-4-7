<?php
    require("DBconnect.php");
    $Id=$_GET["Id"];
    $Name=$_GET["Name"];
    $Password=$_GET["Password"];
    $Role=$_GET["Role"];
    $Email=$_GET["Email"];
    $Phone=$_GET["Phone"];

    echo $Id,$Name,$Password,$Role;

    $SQL="UPDATE homework SET Name='$Name',Password='$Password',Role='$Role',Email='$Email',Phone='$Phone' WHERE Id='$Id'";
    

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
        //header('Location: list.php');
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
    }
    
    ?>