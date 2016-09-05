<?php
    session_start();
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $sort = $_GET['sort'];
    $deletesql = "delete from l_borr where sort='".$sort."';";  
    if(mysqli_query($con,$deletesql)){
        $b_sort =$_GET['b_sort']; 
        echo $b_sort;
        $sqlb = "select * from l_book where b_sort='".$b_sort."';";
        if($queryb = mysqli_query($con,$sqlb)){
            $valueb = mysqli_fetch_row($queryb);
            $b_intensity=$valueb[10];
            //echo $b_intensity;
        }
        $b_intensity =$b_intensity+1;
        //echo $b_intensity;
        $updatesql = "update l_book set b_intensity='{$b_intensity}' where b_sort = '{$b_sort}';";    
        mysqli_query($con,$updatesql);
        echo $b_intensity;
        echo "<script>alert('归还图书成功');window.location.href='1_r_borrow_search.php';</script>";
    }else{
       echo "<script>alert('归还图书失败');window.location.href='1_r_borrow_search.php';</script>";
    }
    
?>