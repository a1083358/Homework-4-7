<?php
    require("DBconnect.php");
    $Id=$_GET["Id"];
    echo $Id;
    $SQL="SELECT * FROM homework WHERE Id='$Id'";
    if($result=mysqli_query($link,$SQL)){
        while($row=mysqli_fetch_assoc($result)){
            $Name=$row["Name"];
            $Password=$row["Password"];
            $Role=$row["Role"];
            $Email=$row["Email"];
            $Phone=$row["Phone"];
        }
    }
    ?>
<center>
    <h1>使用者更新</h1>
    <form action="updateconfirm.php" method="get" style="width: 80%;" enctype="multipart/form-data">
        User number：<?php echo $Id;?><br>
        <input type="hidden" name='Id' value='<?php echo $Id;?>';>
        帳號Name：<input type="text" name="Name" value='<?php echo $Name;?>'><br><br>
        密碼PWD：<input type="text" name="Password" value='<?php echo $Password;?>'><br><br>
        Email：<input type="email" name="Email" value='<?php echo $Email;?>'><br><br>
        電話：<input type="tel" name="Phone" value='<?php echo $Phone;?>'><br><br>
        身分: <input type="radio" name="Role" value="user" <?php echo ($Role == 'user') ? 'checked' : ''; ?> >user<input type="radio" name="Role" value="admin" <?php echo ($Role == 'admin') ? 'checked' : ''; ?> >admin<br><br>
        <br><br>
        <input type="submit"><br><br>
        </form>
        </center>
    