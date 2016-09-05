<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $r_sort = $_GET['r_sort'];
    $query = mysqli_query($con,"select * from l_reader where r_sort='".$r_sort."';");
    $data = mysqli_fetch_assoc($query);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="style/backstage.css">
<link type="text/css" rel="stylesheet" href="style/reset.css">
<link type="text/css" rel="stylesheet" href="style/main.css">
</head>

<body>
<!--头-->
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">内蒙古大学图书馆后台管理系统</h3>
    </div>
<!--导航-->
    <div class="operation_user clearfix">
        
        <div class="link fr">
            <a href="index2.php" class="icon icon_i">首页</a><span></span>
            <a href="login.html" class="icon icon_e">退出</a>
        </div>
    </div>
<!--主要内容-->
    <div class="content clearfix">

        <div class="main">
            <!--右侧内容-->
            <form class="loginBox" style="margin-top: 3%;" name="login" method="post" action="2_r_change_handle.php">
            <input type="hidden" name="r_sort" value="<?php echo $data['r_sort']?>" />
                <div class="login_cont">
                    <ul class="login">
                        <li class="l_tit">账号</li>
                        <li class="mb_10"><input  name="r_id"  type="text" class="login_input user_icon" value="<?php echo $data['r_id']?>"/></li>
                        <li class="l_tit">姓名</li>
                        <li class="mb_10"><input name="r_name" type="text" class="login_input user_icon" value="<?php echo $data['r_name']?>"/></li>
                        <li class="l_tit">密码</li>
                        <li class="mb_10"><input  name="r_pwd"  type="text" class="login_input user_icon" value="<?php echo $data['r_pwd']?>"/></li>
                        <li class="l_tit">学院</li>
                        <li class="mb_10"><input  name="r_aca"  type="text" class="login_input user_icon" value="<?php echo $data['r_aca']?>"/></li>
                        <li clsss="l_tit"><input type="submit" value="提交" class="login_btn"></li>
                                
                    </ul>
                </div>
            </form>
        </div>

        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
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