<html>
    <head>
        <title>註冊資訊</title>
    </head>
    <body>
    <?php
    $enroll=false;
    ob_start();
    require("DBconnect.php");//一定要找到檔案
    
    echo "<h1>"."註冊資訊"."</h1>"."<br>";
    $Name=$_GET["Name"];
    echo "<h3>"."帳號：".$Name."</h3>"."<br>";
    $Password=$_GET["Password"];
    echo "<h3>"."密碼：".$Password."</h3>"."<br>";
    $Role=$_GET["Role"];
    echo "<h3>"."身分：".$Role."</h3>"."<br>";
    $Email=$_GET["Email"];
    echo "<h3>"."Email：".$Email."</h3>"."<br>";
    $Phone=$_GET["Phone"];
    echo "<h3>"."電話：".$Phone."</h3>"."<br>";

    $sql="INSERT INTO homework (Id,Name,Password,Role,Email,Phone) VALUES ('Null','$Name','$Password','$Role','$Email','$Phone')";
    if(mysqli_errno($link)!=0) error_handle($link);//查詢sql是否正確
    else echo "SQL指令：".$sql."查詢成功!<br>";

    if(mysqli_query($link,$sql)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功')";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=sign_up.php'>";
}

    ?>
    <input type ="button" onclick="javascript:location.href='index.php'" value="確定"></input>
    <input type ="button" onclick="javascript:location.href='sign_up.php'" value="重設"></input>
   
?>
    
    </body>
</html>

