<?php
      //不显示错误信息
error_reporting(0);

session_start();

include '../public/common/config.php';

//管理员审核

$username = $_POST['username'];
$password = md5($_POST['password']);



$sql = "select * from user where username='{$username}' and password = '{$password}' and isadmin=1";

$rst = mysql_query($sql);
$row = mysql_fetch_assoc($rst);




if($row){
	$_SESSION['admin_username'] = $username;
	$_SESSION['admin_userid'] = $row['id'];

	echo "<script>location = 'index.php'</script>";
}else{
	echo "<script>alert('用户名或密码有误！！！')</script>";

	echo "<script>location = 'login.php'</script>";

}
?>