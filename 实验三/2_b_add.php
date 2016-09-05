<?php
	//把传递过来的信息入库,在入库之前对所有的信息进行校验
    $con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库
	if(!(isset($_POST['b_id'])&&(!empty($_POST['b_id'])))){
		echo "<script>alert('编号不能为空');window.location.href='2_b_add.html';</script>";
	}
	$b_id = (int)$_POST['b_id'];
	$b_name = $_POST['b_name'];
	$ISBN = $_POST['ISBN'];
	$b_type = $_POST['b_type'];
	$b_author = $_POST['b_author'];
	$b_press = $_POST['b_press'];
	$b_price = $_POST['b_price'];
	$b_sum = (int)$_POST['b_sum'];
	$b_intensity = (int)$_POST['b_intensity'];
	
	$b_intime = date('Y-m-d h:i:s',time());
	$insertsql = "insert into l_book(b_id, b_name, ISBN, b_type, b_author,b_press, b_intime, b_price, b_sum,b_intensity) values ('{$b_id}', '{$b_name}', '{$ISBN}', '{$b_type}','{$b_author}','{$b_press}','{$b_intime}', '{$b_price}',
	 '{$b_sum}','{$b_intensity}');";
	echo $insertsql;
	if(mysqli_query($con,$insertsql)){
		echo "<script>alert('图书插入成功');window.location.href='2_b_add.html';</script>";
	}else{
		echo "<script>alert('图书插入发布失败');window.location.href='2_b_add.html';</script>";
	}
?>
