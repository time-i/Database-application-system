<!--用于删除主页面的某个学生名单 -->
<?php 
	include '../model/Conn2.php';
	$id = $_GET['id'];

	//back up
/*	$sql2 = "select * from StuInfo into oufile '/var/lib/mysql-files/table2'";
	$mysqli ->query($sql2);
	$name="/home/weichen/stt.sql";
	//backup
	$exec="/usr/bin/mysqldump -u".$db_user." -p".$db_pwd." ".$db." > ".$name;
	
	echo 'mysqldump -uroot -p123456 Student > /home/weichen/student1.sql';
//	$cmd = "mysqldump -uroot -p123456 Student > ./home/weichen/student2.sql";
	
	exec($exec,$return_var);		
	$er = system("/usr/bin/mysqldump -uroot -p123456 Student > '/home/weichen/student5.sql'",$res);
	
	
	echo "</br>";
	echo $return_var;
	echo $er;
	if($er){
		echo "success!";
	}else {echo "fail";}
*/
	$sql = "delete from StuInfo where id= '".$id."'";
	$res = $mysqli->query($sql);

		
	mysqli_close($result);
	$mysqli->close();
	header('location:../Main.php?page=1');
 ?>
