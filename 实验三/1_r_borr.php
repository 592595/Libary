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
    $s_time = date('Y-m-d h:i:s',time());
    $time=time()+30*24*3600;
    $e_time=date('Y-m-d h:i:s',$time);
    $sqlb = "select * from l_book where b_sort='".$b_sort."';";
    if($query = mysqli_query($con,$sqlb)){
        $value = mysqli_fetch_row($query);
        $b_intensity=$value[10];
    }
    $insertsql = "insert into l_borr(r_sort, b_sort, s_time, e_time) values ('{$r_sort}', '{$b_sort}', '{$s_time}', '{$e_time}');";
    if(mysqli_query($con,$insertsql)&&$b_intensity!=0){   
        $b_intensity =$b_intensity-1;
        $updatesql = "update l_book set b_intensity='{$b_intensity}' where b_sort = '{$b_sort}';";    
        mysqli_query($con,$updatesql);
        echo "<script>alert('借书成功');window.location.href='1_r_manage_search.php';</script>";      
        
    }else{
        echo "<script>alert('借书失败，请预约！');window.location.href='1_r_manage_search.php';</script>";
    }
    //window.location.href='1_r_manage_search.php';
?>