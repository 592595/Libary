<?php
    //把传递过来的信息入库,在入库之前对所有的信息进行校验
    session_start();
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $_SESSION['name'];
    $sql = "select * from l_reader where r_id='".$_SESSION['name']."';";
    if($query = mysqli_query($con,$sql)){
        $value = mysqli_fetch_row($query);
        $r_sort=$value[0];
    }
    else
        ;
    $b_sort = (int)$_GET['b_sort']; 
    $time = date('Y-m-d h:i:s',time());
    $insertsql = "insert into l_appointment(r_sort, b_sort, time) values ('{$r_sort}', '{$b_sort}', '{$time}');";
    echo  $insertsql;
    if(mysqli_query($con,$insertsql)){   
        echo "<script>window.location.href='1_r_app.php';</script>";      
        
    }else{
        echo "<script>alert('预约失败，请联系管理员！');window.location.href='1_r_app.php';</script>";
    }
    //window.location.href='1_r_app.php';
?>