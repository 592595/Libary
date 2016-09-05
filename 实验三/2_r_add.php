<?php
	//把传递过来的信息入库,在入库之前对所有的信息进行校验
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
	if(!(isset($_POST['r_id'])&&(!empty($_POST['r_id'])))){
		echo "<script>alert('编号不能为空');window.location.href='2_r_add.html';</script>";
	}
	$r_id = (int)$_POST['r_id'];
	$r_name = $_POST['r_name'];
	$r_pwd = $_POST['r_pwd'];
	$r_type =(int)$_POST['r_type'];
	$r_academy = $_POST['r_academy'];

	$insertsql = "insert into l_reader(r_id, r_name, r_pwd, r_type, r_aca) values ('{$r_id}', '{$r_name}', '{$r_pwd}', 
	'{$r_type}', '{$r_academy}');";
	$up = "update l_reader set r_aca = '{$r_academy}' where  r_id = '{r_id}';";
	echo $insertsql;
	if(mysqli_query($con,$insertsql)){
		mysqli_query($con,$up);
		echo "<script>alert('读者插入成功');window.location.href='2_r_add.html';</script>";
	}else{
		echo "<script>alert('读者插入失败');window.location.href='2_r_add.html';</script>";
	}
?>
