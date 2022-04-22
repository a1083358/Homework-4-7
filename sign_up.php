<html>
    <head>
        <title>註冊</title>
    </head>
    <body>    
    <center><h1>註冊</h1></center>
    <center><form action="information.php" method="get" style="width: 80%;" enctype="multipart/form-data">
        帳號：<input type="text" name="Name" placeholder="userid" required><br><br>
        密碼：<input type="password" name="Password" placeholder="password" required><br><br>
        Email：<input type="email" name="Email" placeholder="email" required><br><br>
        電話：<input type="tel" name="Phone" placeholder="phone-number" required><br><br>
        身分: <input type="radio" name="Role" value="user">user<input type="radio" name="Role" value="admin">admin<br><br>
        <input type="submit"><br><br>
    </form></center>
    </body>
</html>