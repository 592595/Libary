<?php
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
    $r_sort = $_GET['r_sort'];
	$deletesql = "delete from l_reader where r_sort='".$r_sort."';";	
	if(mysqli_query($con,$deletesql)){
		echo "<script>alert('删除读者成功');window.location.href='2_r_manage_search.php';</script>";
	}else{
		echo "<script>alert('删除读者失败');window.location.href='2_r_manage_search.php';</script>";
	}

?>