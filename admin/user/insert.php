<?php
error_reporting(0);
 include '../lock.php';
 include '../../public/common/config.php';

 $username = $_POST['username'];
 $password = md5($_POST['password']);

 $sql = "insert into user(username,password) value('{$username}','{$password}')";

 if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
?>