<?php 
	//接收表单数据，增加一个新的学生信息
	session_start();
	$id = $_POST['id'];
	$pwd = $_POST['pwd'];
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$phone = $_POST['phone'];
	$faculty = $_POST['faculty'];
	
	$os = $_POST['os'];
	$db = $_POST['database'];
	$ct = $_POST['computer'];
	$cp = $_POST['compiler'];
	$app = $_POST['app'];
	$arr = array($os,$db,$ct,$cp,$app);

	include '../model/Conn.php';
	//先去看数据库的数据是否已经存在
	$sql = "select id from StuInfo where id = '".$id."'";
	$res = $mysqli->query($sql);
	$attr = $res->fetch_all();
	foreach ($attr as $key) {}
	// echo $sql." ".$res;

	if($key[0] == $id){
		//跳转到404
		$res->close();
		
		header('location:error.php');	
	}else{
		//开始插入数据
	
	$res = $mysqli->query("start transaction");

		for ($j=0;$j<100;$j++) {	
//		echo "890";
		$res = $mysqli->query("lock table StuInfo write");
//		if($res) {echo "1";}else {echo "erro1";}
		$res = $mysqli->query("insert into StuInfo values('".$id."','".$name."','".$sex."','".$phone."','".$faculty."')");
	if($res) {echo "1";}else {
			 $mysqli->query("rollback");
			
		}
		$res = $mysqli->query("unlock tables");
	echo"1";

		$res = $mysqli->query("lock table login write");
		$res = $mysqli->query("insert into login values('".$id."',MD5('".$pwd."'))");
		if (!$res) {
			$res = $mysqli->query("rollback");
		
		}
		$res = $mysqli->query("unlock tables");
	echo "1";		
		$res = $mysqli->query("lock table StuScore write");
	echo "1";		

	for ($i=0; $i < 5; $i++) {
                        $sql3 = "insert into StuScore values('".$id."','".($i+1)."','".$arr[$i]."');";
                        $res = $mysqli->query($sql3);
                }
/*		for ($j=0; $j < 3; $j++) {
			$res = $mysql->query("insert into StuScore values('".$id."','".($j+1)."','".$arr[$j]."')");
		}
*/	echo "1";
		if (!$res) {
			$res = $mysqli->query("rollback");
//			continue；
		}
		$res = $mysqli->query("unlock tables");
		break;	
	}	
	echo "0000";
		$res = $mysqli->query("commit");
/*	for ($i=0; $i < 5; $i++) {
                        $sql3 = "insert into StuScore values('".$id."','".($i+1)."','".$arr[$i]."');";
                        $res = $mysqli->query($sql3);
                }
*/		
		//关闭资源
		mysqli_close($res); 
		$mysqli->close();
	 	header('location:../Main.php?page=1');
	 		
	}





 ?>
