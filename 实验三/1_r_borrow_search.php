<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $sql = "select * from l_borr";
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
                                <th width="22%">书名</th>                                
                                <th width="22%">作者</th>
                                <th width="22%">借阅时间</th>
                                <th width="22%">截至时间</th>
                                <th>操作</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            
                        $value = mysqli_fetch_row($query);
                        while($value)
                        {
                            $b_sort =$value[2];
                            
                            $sqla = "select * from l_book where b_sort='".$b_sort."';";
                            // echo $sqla;
                            if($query1 = mysqli_query($con,$sqla)){
                                $value1 = mysqli_fetch_row($query1);
                                $value[1]=$value1[2];
                                $value[2]=$value1[5];
                            }
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

                                echo "<td align='center'>";
                                echo '<a href="1_r_return.php?sort='.$value[0].'&b_sort='.$b_sort.'" class="btn">归还</a>';
                                //style="visibility:hidden"0
                                //echo "1_r_return.php?sort='.$value[0].'&b_sort='.$b_sort.'";
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