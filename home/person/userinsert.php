<?php
      //不显示错误信息
error_reporting(0);
session_start();


include '../../public/common/config.php';

$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$user_id=$_SESSION['home_userid'];

$sql="insert into touch(name,addr,tel,email,user_id) values('{$name}','{$addr}','{$tel}','{$email}','{$user_id}')";

if (mysql_query($sql)) {
	echo "<script>location='userlist.php'</script>";
}


?>