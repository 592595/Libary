<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $sql = "select * from l_reader where r_type='1';";
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
            <a href="index2.php" class="icon icon_i">首页</a><span></span><a href="login.html" class="icon icon_e">退出</a>
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
                                <th width="20%">账号</th>
                                <th width="20%">姓名</th>
                                <th width="20%">密码</th>
                                <th width="20%">所在学院</th>
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
                                echo $value[5];
                                echo "</td>";

                                echo "<td align='center'>";
                                echo '<a href="2_r_change.php?r_sort='.$value[0].'" class="btn">修改</a>
                                      <a href="2_r_del_handle.php?r_sort='.$value[0].'" class="btn">删除</a>';
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
                    <h3><span>-</span>图书管理</h3>
                        <dl>
                            <dd><a href="2_b_add.html">图书插入</a></dd>
                            <dd><a href="2_b_manage_search.php">图书查询</a></dd>
                                                    
                        </dl>                    
                    </li>

                    <li>
                        <h3><span>+</span>读者管理</h3>
                        <dl>
                            <dd><a href="2_r_add.html">插入读者信息</a></dd>
                            <dd><a href="2_r_manage_search.php">读者信息查询</a></dd>
                            <dd><a href="2_r_borrow_search.php">读者借阅查询</a></dd>
                        </dl>                        
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>