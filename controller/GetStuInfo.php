
<?php 
	//获取用户的所有信息并且显示在主页上（根据session)
	session_start();
	$mysql_conf = array(
    'host'    =>'127.0.0.1:3306',
    'db'      =>'Student',
    'db_user'=>'root',
    'db_pwd' =>'123456',
    );
    //获得连接
	$mysqli=new mysqli($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd']);
	//选择数据库
	$mysqli->select_db($mysql_conf['db']);
	//查询语句
	
$mysqli->query("set names 'utf8';");//编码转换,放乱码出现

//      $sql2 = "lock table StuInfo read";
  //    $res = $mysqli->query($sql2);
        $sql = "select * from StuInfo where id = '".$_SESSION['id']."'";
        //处理语句
        $res = $mysqli->query($sql);
        //拿到所有信息
        $attr = $res->fetch_all();

//        sleep(30);
  //      $sql3 = "unlock tables";
    //   $res = $mysqli->query($mysql3);
      //  echo "read lock has unlocked!";

	$res->close();
	$mysqli->close();
 ?>
