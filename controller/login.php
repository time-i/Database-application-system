<?php 
	//验证登录
	session_start();
	//POST传值
//	$uid = ($_POST['id']);
	// avoid sql inserting	
	$uid = addslashes($_POST['id']);
	$pwd = $_POST['pwd'];
	$_SESSION['user'] = $uid;
	include "../model/Conn.php";
	
	//查询登录名和密码匹配
	$sql = "select * from login where id='".$uid."' and pwd = MD5('".$pwd."')";
	//查询结果集
	$result = $mysqli->query($sql);
	if(mysqli_num_rows($result) > 0) {	
		//存储session并跳转
		$_SESSION['uid'] = $uid;
		header('location:../Main.php?page=1');	
		//跳转到主页面
	}else{
		//注册
		header('location:../regist.html');
	}
	$result->close();
	$mysqli->close();


 ?>
