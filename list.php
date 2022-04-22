<?php
    require("DBconnect.php");//連接到DBconnect.php，可使用裡面的內容及變數
    $SQL="SELECT * FROM homework";

    echo "<h1>使用者列表</h1>";
    if($result=mysqli_query($link,$SQL)){//用表格的形式印出
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Id</td><td>Name</td><td>Password</td><td>Role</td><td>Email</td><td>Phone</td>";
        while($row=mysqli_fetch_assoc($result)){//只要裡面有內容
            echo "<tr>";
            //使刪除可以跳頁以及執行刪除的動作
            echo "<td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["Password"]."</td><td>".$row["Role"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td><a href='delete.php?Id=".$row["Id"]."'>刪除</a></td><td><a href='update.php?Id=".$row["Id"]."'>修改</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>