
		<?php
		session_start();

		$con=mysqli_connect('127.0.0.1','root','','test','3306');//连接数据库

		$name=$_POST['name']; //接受传递值
		$pass=$_POST['pass'];
		$s = "select * FROM l_reader where r_id='" . $name . "' and r_pwd='" . $pass."';";
		echo $s;
		$result = mysqli_query($con, $s);
		$sql = "select * FROM l_reader where r_id = '{$name}' and r_pwd = '{$pass}';";
		$each = mysqli_fetch_row($result);
		$_SESSION['name'] = $name;
		$_SESSION['pass'] = $pass;
		echo $each[4];
		if ($each[4]==1) {
				header('location: index1.php');
				die();
		}
		else{
			if ($each[4]==2) {
				header('location: index2.php');
				die();
			}
			else
				;
		}

			?>
