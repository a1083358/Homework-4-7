<?php
    $username=$_GET["username"];//使用POST/GET紀錄使用者資料
    echo "你的名字：".$username."<br>";
    $email=$_GET["email"];
    echo "你的電子郵件：".$email."<br>";
    $number=$_GET["number"];
    echo "妳的電話號碼：".$number."<br>";
    $gender=$_GET["gender"];
    echo "妳的性別：".$gender."<br>";

    $testgender=$_GET["testgender"];//value為數字，所以用if分辨數字的涵義
    if($testgender=='1'){
        echo "妳的性別：女性<br>";
    }elseif($testgender=='2'){
        echo "妳的性別：男性<br>";
    }else{
        echo "妳的性別：其他<br>";
    } 

    $testfood=$_GET["testfood"];//把陣列GET進來
    $foods=implode(",",$testfood);//implode可以把array裡的內容全部輸出，並用,分開
    echo "你的食物偏好：".$foods."<br>";

    $food=$_GET["food"];
    $foodsize=count($food);//count可以計算array有幾個值
    for($i=0;$i<$foodsize;$i++){
        echo "你的食物偏好：".$food[$i]."<br>";
    }

    $comment=$_GET["comment"];//建議
    $comment=strip_tags($comment);//將網址隱藏，資安
    $comments=nl2br($comment);//輸出會如使用者打的一樣會換行
    echo "你的建議：".$comments;

    
    
    
    ?>