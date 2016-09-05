<?php
	//把传递过来的信息入库,在入库之前对所有的信息进行校验
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
	$r_id = (int)$_POST['r_id'];
	$r_name = $_POST['r_name'];
	$r_pwd = $_POST['r_pwd'];
	$r_aca = $_POST['r_aca'];
	$r_sort=$_POST['r_sort'];
	$updatesql = "update l_reader set r_id='{$r_id}',r_name='{$r_name}',r_pwd='{$r_pwd}',r_aca='{$r_aca}' where r_sort = '{$r_sort}';";
	echo $updatesql;
	if(mysqli_query($con,$updatesql)){
		echo "<script>alert('修改读者信息成功');window.location.href='2_r_manage_search.php';</script>";
	}else{
		echo "<script>alert('修改读者信息失败);window.location.href='2_r_manage_search.php';</script>";
	}
?>
