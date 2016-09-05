<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $sql = "select * from l_book where b_intensity=0 ";
    $query  = mysqli_query($con,$sql);
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="style/backstage.css">
</head>

<body>
<!--头-->
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">内蒙古大学图书馆</h3>
    </div>
<!--导航-->
    <div class="operation_user clearfix">
        <div class="link fl"><a href="#">图书</a><span>&gt;&gt;</span><a href="#">图书管理</a></div>
        <div class="link fr">
            <a href="index1.php" class="icon icon_i">首页</a>
            <span></span><a href="login.html" class="icon icon_e">退出</a>
        </div>
    </div>
<!--主要内容-->
    <div class="content clearfix">

        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">图书信息</div>
                <div class="details">
                    
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="10%">书名</th>
                                <th width="10%">作者</th>
                                <th width="10%">出版社</th>
                                <th width="10%">出版日期</th>
                                <th width="10%">ISBN</th>
                                <th width="10%">版次</th>
                                <th width="10%">定价</th>
                                
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $value = mysqli_fetch_row($query);
                        while($value)
                        {
                            
                            echo '<tr>';
                               
                                echo "<td>";
                                echo $value[1];
                                echo "</td>";

                                echo "<td>";
                                echo $value[2];
                                echo "</td>";

                                echo "<td>";
                                echo $value[3];
                                echo "</td>";

                                echo "<td>";
                                echo $value[4];
                                echo "</td>";

                                echo "<td>";
                                echo $value[5];
                                echo "</td>";

                                echo "<td>";
                                echo $value[6];
                                echo "</td>";

                                echo "<td>";
                                echo $value[7];
                                echo "</td>";

                                echo "<td>";
                                echo $value[8];
                                echo "</td>";

                                echo "<td align='center'>";
                                echo '<a href="1_r_app_handle.php?b_sort='.$value[0].'" class="btn">预约</a>';
                                echo "</td>";
                                
                                echo"</tr>";
                                $value = mysqli_fetch_row($query);
                        }
                            ?>
                            


                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--左侧列表-->
         <div class="menu">
            <div class="cont">
                <div class="title">信息中心</div>
                <ul class="mList">
                    <li>
                       <h3><span>+</span>个人中心</h3>
                        <dl>
                            <dd><a href="1_r_manage_search.php">图书查询</a></dd>
                            <dd><a href="1_r_app.php">图书预约</a></dd>
                            <dd><a href="1_r_borrow_search.php">借书查询</a></dd>
                            <dd><a href="1_r_app_search.php">预约查询</a></dd>
                        </dl> 
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>