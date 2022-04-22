<?php
    require("DBconnect.php");//連接到DBconnect.php，可使用裡面的內容及變數


    if(isset($_GET["Name"]) && isset($_GET["Password"]) && isset($_GET["Role"])){//euserid是否存在
        if($_GET["Name"]!=null && $_GET["Password"]!=null && $_GET["Role"]!=null){//euserid是否為不是空值
            $Name=$_GET["Name"];
            $Password=$_GET["Password"];
            $Role=$_GET["Role"];
            $SQL="SELECT * FROM homework WHERE Name='$Name' AND Password='$Password' AND Role='$Role'";
            $result=mysqli_query($link,$SQL);
            if(mysqli_num_rows($result)==1){//查詢完的結果是否只有1行
                if($Role=='user'){
                    setcookie("UID",$Name,time()+17280);
                    header("Location:success.php");
                }else{
                    setcookie("UID",$Name,time()+17280);
                    header("Location:list.php");
                }
            }else{
                echo "<script type='text/javascript'>";
                echo "alert('登入失敗')";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=failed.php'>";
            }
        }else{
            echo "<script type='text/javascript'>";
                echo "alert('未填寫完成')";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
        }
    }else{
        echo "<script type='text/javascript'>";
                echo "alert('未填寫完成')";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }
?>