<!--保存用户基本学籍信息-->
<?php 
	session_start();
	$uname = $_POST['stu_name'];
	$sex = $_POST['stu_sex'];
	$id = $_POST['xstu_id'];
	$dept = $_POST['dept'];
	$phone = $_POST['phone'];
	include '../model/Conn.php';
	$sql = "update StuInfo set name = '".$uname."',sex = '".$sex."',id='".$id."',dept = '".$dept."',phone = '".$phone."' where id='".$id."'";
	// echo $sql;
	// 执行语句
	$result = $mysqli->query($sql);

	// if($result){
		//保存成功后跳转
	mysqli_close($result);
	$mysqli->close();
	header('location:../student.php');
	// }

 ?>
