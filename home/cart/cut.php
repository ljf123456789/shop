<?php 
      //不显示错误信息
error_reporting(0);
session_start();

$id=$_GET['id'];

$_SESSION['shops'][$id]['num']--;

if ($_SESSION['shops'][$id]['num']<1) {
	$_SESSION['shops'][$id]['num']=1;
}
echo "<script>location='index.php'</script>";



 ?>