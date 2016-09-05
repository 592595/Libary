<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    session_start();
    $_SESSION['name'];
    $sqla = "select * from l_reader where r_id='".$_SESSION['name']."';";
    if($querya = mysqli_query($con,$sqla)){
        $valuea = mysqli_fetch_row($querya);
        $r_sort=$valuea[0];
    }

    

   


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
                                <th width="10%">总数</th>
                                <th width="10%">余量</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $sql = "select * from l_appointment where r_sort='".$r_sort."';";
                        $query  = mysqli_query($con,$sql);                             
                        $value = mysqli_fetch_row($query);
                        
                        while($value = mysqli_fetch_row($query))
                        {
                            $b_sort=$value[2];
                            $sqlb="select * from l_book where b_sort='".$b_sort."';";

                            $queryb  = mysqli_query($con,$sqlb);
                            $valueb = mysqli_fetch_row($queryb);


                            echo '<tr>';
                               
                                echo "<td>";
                                echo $valueb[1];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[2];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[3];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[4];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[5];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[6];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[7];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[8];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[9];
                                echo "</td>";

                                echo "<td>";
                                echo $valueb[10];
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