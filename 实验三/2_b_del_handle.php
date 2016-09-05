<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $b_sort = $_GET['b_sort'];
	$deletesql = "delete from l_book where b_sort='".$b_sort."';";	
	if(mysqli_query($con,$deletesql)){
		echo "<script>alert('删除图书成功');window.location.href='2_b_manage_search.php';</script>";
	}else{
		echo "<script>alert('删除图书失败');window.location.href='2_b_manage_search.php';</script>";
	}

?>