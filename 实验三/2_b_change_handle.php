<?php
	//把传递过来的信息入库,在入库之前对所有的信息进行校验
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
	$b_id = (int)$_POST['b_id'];
	$b_name = $_POST['b_name'];
	$ISBN = $_POST['ISBN'];
	$b_type = $_POST['b_type'];
	$b_press = $_POST['b_press'];
	$b_price = $_POST['b_price'];
	$b_sum = (int)$_POST['b_sum'];
	$b_intensity = (int)$_POST['b_intensity'];
	$b_sort = (int)$_POST['b_sort'];
	$b_intime = date('Y-m-d h:i:s',time());
	
	$updatesql = "update l_book set b_id=$b_id,b_name='{$b_name}',ISBN='{$ISBN}',b_type='{$b_type}',b_press='{$b_press}',b_intime='{$b_intime}',b_price='{$b_price}',b_sum='{$b_sum}',b_intensity='{$b_intensity}' where b_sort = '{$b_sort}';";
	echo $updatesql;
	if(mysqli_query($con,$updatesql)){
		echo "<script>alert('修改图书成功');window.location.href='2_b_manage_search.php';</script>";
	}else{
		echo "<script>alert('修改图书失败);window.location.href='2_b_manage_search.php';</script>";
	}
?>
