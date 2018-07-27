<?php

 error_reporting(0);
  include '../lock.php';
 include '../../public/common/config.php';

 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $id = $_POST['id'];

 $sql = "update user set username = '{$username}',password = '{$password}' where id = {$id}";

 if (mysql_query($sql)) {
 		echo '<script>location ="index.php"</script>';
 }