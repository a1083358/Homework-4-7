<html>
    <head>
        <meta name="keywords" content="墾丁旅遊, 墾丁三日遊">
        <title>完成-墾丁三日遊</title>
        <link rel="icon" href="/img/icon.jpg" type="image/x-con"/>
    </head>
    <body>
        
        <?php
        //body的顏色
            echo "<body bgcolor='#f7f3d7'>" ;
            ?>
        <center><h3>登入完成</h3></center>    
        <center><h1>墾丁三日遊</h1></center>
        <hr color="blue" width="800">
        <ol>
            <li><h2>行程內容</h2>
            <div><h3>第一天</h3>
                <p>由高雄火車站或小港機場到墾丁→ 午餐→ 小灣戲水→ 青年活動中心→ 情人灘拾貝、觀落日→ 晚餐墾丁大街→ 小灣觀星→ 回民宿。</p></div>
                <div><h4>第二天</h4>
                <p>早餐→ 水上活動(浮潛、乘坐香蕉船、水上摩托車…等)→ 午餐→ 瓊麻館→ 後壁湖碼頭→ 貓鼻頭→ 南灣→ 關山飛來石→ 關山日落→ 晚餐墾丁大街→ 鵝鑾鼻燈塔夜遊→ 龍磐觀星→ 回民宿。</p></div>
                <div><h4>第三天</h4>
                <p>早餐→ 東半島之旅→ 船帆石→ 貝殼砂展示館→ 聯勤→ 龍磐草原→ 風吹砂→ 港口吊橋→ 恆春→ 墾丁→ 午餐→ 回家。</p></div>
                <div>
                    <a href="http://uukt.com.tw/attraction/20" ><img src="/img/picture_1.jpg" border="2" width="45%"></a>
                    <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00181" ><img src="/img/picture_2.jpg" border="2" width="45%"></a>
                </div>
            <li><h2>報名表</h2><br>
            <form action="rinfo.php" method="get" style="width: 80%;" enctype="multipart/form-data">
            名字(Name)：<input type="text" name="username" placeholder="name" required><br><br>
            電子郵件(Email)：<input type="email" name="email" placeholder="email"><br><br>
            電話(Phone-number)：<input type="tel" name="number" placeholder="phone-number"><br><br>
            性別(Gender)：
            <input type="radio" name="gender" value="female" checked>女性(Female)
            <input type="radio" name="gender" value="man">男性( Male)
            <input type="radio" name="gender" value="other">其他(Other)<br><br>
            食物偏好(Food preference)：
            <input type="checkbox" name="food">台式(Taiwanese food)
            <input type="checkbox" name="food">中式(Chinese food)
            <input type="checkbox" name="food">速食(Fast food)
            <input type="checkbox" name="food">西式(Western-style food)
            <input type="checkbox" name="food">法式(French Food)
            <input type="checkbox" name="food">素食(Vegetarian diet)
            <input type="checkbox" name="food">炸物(Fried food)
            <input type="checkbox" name="food">甜點(Dessert)
            <input type="checkbox" name="food">海鮮(Seafood)
            <input type="checkbox" name="food">小吃(Street food)<br><br>
            <p>T恤尺寸(T-shirt size)：</p>
            <select name="size">
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select><br><br>
            T恤顏色(T-shirt color)：<input type="text" name="color" placeholder="color" required><br><br>
            生日(Brithday)：<input type="date" name="brithday" placeholder="brithday" required><br><br>
            車票號碼(Tickets number)：<input type="number" name="tickets" placeholder="tickets" required><br><br>
            <input type="submit"><br><br>
            </form>
            <h3><span style="color:red;border:3px red dashed">T-shirt size對照表</span></h3>
            <table border="5">
            <tr>
                <th><font size="5">cm<th><font size="5">S<th><font size="5">M<th><font size="5">L<th><font size="5">XL<!--標題-->
            </tr>
            <tr>
                <th><font size="5">衣長<td><font size="5">65<td><font size="5">69<td><font size="5">71<td><font size="5">74<!--表格內容-->
            </tr>
            <tr>
                <th><font size="5">胸寬<td><font size="5">47<td><font size="5">51<td><font size="5">54<td><font size="5">58
            </tr>
            <tr>
                <th><font size="5">肩距<td><font size="5">43<td><font size="5">46<td><font size="5">51<td><font size="5">53
            </tr>
        </table>
        </ol>
    </body>
</html>