<?php
session_start();


include '../../public/common/config.php';

$id=$_POST['id'];
$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];


$sql="update touch set name='{$name}',addr='{$addr}',tel='{$tel}',email='{$email}' where id={$id}";

if (mysql_query($sql)) {
	echo "<script>location='userlist.php'</script>";
}


?>