<?php
    session_start();
    ?>
<?php
    if(isset($_COOKIE["UID"])){
        $cookieUID=$_COOKIE["UID"];
        echo "感謝".$cookieUID."回到本系統";
    }else{
        echo "歡迎初次來本系統";
    }
    ?>
<html>
<head>
        <meta name="keywords" content="登入, 墾丁三日遊">
        <title>登入</title>
        <link rel="icon" href="/img/icon.jpg" type="image/x-con"/>
</head>
<body>
<center><h2>墾丁三日遊</h2></center>    
<center><h1>登入</h1></center>
    <?php echo "<body bgcolor='#cefafb'>" ;?>
    <center><form action="record.php" method="get" style="width: 80%;" enctype="multipart/form-data">
        帳號：<input type="text" name="Name" placeholder="userName" required><br><br>
        密碼：<input type="password" name="Password" placeholder="Password" required><br><br>
        身分:<input type='radio' name='Role' value='user' checked>user<input type='radio' name='Role' value='admin'>admin</br>
        <input type="submit"><br><br>
    </form></center>
    <?php
        echo "<body bgcolor='#feffd9'>" ;
        $link = @mysqli_connect(//連接資料庫
            'localhost',//主機名稱
            'test',//使用者名稱
            '15963',//密碼
            'php'//資料庫名稱
        );
        $dbname="php";


        if(isset($_GET["Name"]) && isset($_GET["Password"]) && isset($_GET["Role"])){//euserid是否存在
            if($_GET["Name"]!=null && $_GET["Password"]!=null && $_GET["Role"]!=null){//euserid是否為不是空值
                $Name=$_GET["Name"];
                $Password=$_GET["Password"];
                $Role=$_GET["Role"];
                $SQL="SELECT * FROM homework WHERE Name='Name' AND Password='Password' AND Role='Role'";
                $result=mysqli_query($link,$SQL);
                if(mysqli_num_rows($result)==1){//查詢完的結果是否只有1行
                    if($Role='user'){
                        setcookie("UID",$Name,time()+17280);
                        header("Location:success.php");
                    }else{
                        setcookie("UID",$Name,time()+17280);
                        header("Location:list.php");
                    }
                }else{
                        header("Location:list.php");
                }
            }
        }

        
        ?>
</body>
</html>