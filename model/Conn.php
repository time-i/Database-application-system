<!-- 数据库连接文件-->
<?php 
	$mysql_conf = array(
    'host'    =>'127.0.0.1',
    'db'      =>'Student',
    'db_pwd' =>'123456',
    );
	if ($_SESSION['user'] == "111") {
		$mysqli=new mysqli($mysql_conf['host'],'root',$mysql_conf['db_pwd']);
	}else {
		$mysqli=new mysqli($mysqli_conf['host'],'anony',$mysql_conf['db_pwd']);		
	}
	if($mysqli->connect_errno){
	    die("could not connect to the database:\n" . $mysqli->connect_errno);//诊断连接错误
	}
	$mysqli->query("set names 'utf8';");//编码转换
	$select_db = $mysqli->select_db($mysql_conf['db']);
	if(!$select_db){
	    die("could not connect to the db:/n" . $mysql->error);
	}
?>
