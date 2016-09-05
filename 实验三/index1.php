<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $sql = "select * from l_book";
    $Total=0;
    $Land=0;
    $Free=0;
    $query  = mysqli_query($con,$sql);
    $value = mysqli_fetch_row($query);
    while($value)
    {
        $Total=(int)$Total+(int)$value[9];
        $Free=(int)$Free+(int)$value[10];
        $value = mysqli_fetch_row($query);
    }
    $Land=$Total-$Free;
?>



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
        <div class="link fl"><a href="#">图书</a><span>&gt;&gt;</span><a href="#">个人信息</a><span>&gt;&gt;</span><a href="#">图书管理</a></div>
        <div class="link fr">
            <a href="index1.php" class="icon icon_i">首页</a><span></span>
            <a href="login.html" class="icon icon_e">退出</a>
        </div>
    </div>
<!--主要内容-->
    <div class="content clearfix">

        <div class="main">
            <!--右侧内容-->


            <div class="cont">
                <div class="title">图书信息</div>
                <div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                           
                        </div>
                        <div class="fr">
                            <div class="text">
                                
                            </div>
                            <div class="text">
                                
                            </div>
                           
                        </div>
                    </div>
                    <!--表格-->
                    <p style="font-family : 微软雅黑;font-size : 24px;text-align:center;margin-bottom:5%;">欢迎使用内蒙古大学图书管理系统</p>
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="33%">馆藏书籍总数</th>
                                <th width="33%">已借图书总数</th>
                                <th width="33%">在馆书籍总数</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            echo '<tr>';
                               
                                echo "<td>";
                                echo  $Total;
                                echo "</td>";


                                echo "<td>";
                                echo $Land;
                                echo "</td>";

                                echo "<td>";
                                echo $Free;
                                echo "</td>";

                                
                                
                                echo"</tr>";
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