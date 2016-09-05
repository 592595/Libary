<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $b_sort = $_GET['b_sort'];
    $query = mysqli_query($con,"select * from l_book where b_sort='".$b_sort."';");
    $data = mysqli_fetch_assoc($query);
?>

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

        <div class="main">p
            <!--右侧内容-->
            <form class="loginBox" style="margin-top: 3%;" name="login" method="post" action="2_b_change_handle.php">
            <input type="hidden" name="b_sort" value="<?php echo $data['b_sort']?>" />
                <div class="login_cont">
                    <ul class="login">
                        <li class="l_tit">编号</li>
                        <li class="mb_10"><input  name="b_id"  type="text" class="login_input user_icon" value="<?php echo $data['b_id']?>"/></li>
                        <li class="l_tit">书名</li>
                        <li class="mb_10"><input name="b_name" type="text" class="login_input user_icon" value="<?php echo $data['b_name']?>"/></li>
                        <li class="l_tit">ISBN</li>
                        <li class="mb_10"><input  name="ISBN"  type="text" class="login_input user_icon" value="<?php echo $data['ISBN']?>"/></li>
                        <li class="l_tit">类型</li>
                        <li class="mb_10"><input name="b_type" type="text" class="login_input user_icon" value="<?php echo $data['b_type']?>"/></li>
                        <li class="l_tit">作者</li>
                        <li class="mb_10"><input  name="b_author"  type="text" class="login_input user_icon" value="<?php echo $data['b_author']?>"/></li>
                        <li class="l_tit">出版社</li>
                        <li class="mb_10"><input name="b_press" type="text" class="login_input user_icon" value="<?php echo $data['b_press']?>"/></li>
                        <li class="l_tit">价格</li>
                        <li class="mb_10"><input name="b_price" type="text" class="login_input user_icon" value="<?php echo $data['b_price']?>"/></li>
                        <li class="l_tit">总数</li>
                        <li class="mb_10"><input name="b_sum" type="text" class="login_input user_icon" value="<?php echo $data['b_sum']?>"/></li>
                        <li class="l_tit">余量</li>
                        <li class="mb_10"><input name="b_intensity" type="text" class="login_input user_icon" value="<?php echo $data['b_intensity']?>"/></li>
                        <li clsss="l_tit"><input type="submit" value="提交" class="login_btn"></li>
                        <!--<li class="autoLogin"><input type="checkbox" id="a1" class="checked">
                            <label for="a1">自动登陆</label>
                        
                            <a href="注册.html" style="size: 36px;color: black;margin-left: 50%;">注册</a>-->
                        </li>           
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