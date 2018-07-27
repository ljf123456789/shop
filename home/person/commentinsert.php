<?php

session_start();

include '../../public/common/config.php';

$content=$_POST['content'];
$user_id=$_SESSION['home_userid'];
$shop_id=$_POST['shop_id'];

$time=time();

$sql="insert into comment(user_id,content,shop_id,time) values('{$user_id}','{$content}','{$shop_id}','{$time}')";

if (mysql_query($sql)) {
	echo "<script>location='../shop.php?shop_id={$shop_id}'</script>";
}



?>