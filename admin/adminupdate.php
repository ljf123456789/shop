<?php

session_start();
 error_reporting(0);
 include '../public/common/config.php';

 $password = md5($_POST['password']);

 $sql = "update user set password = '{$password}' where username = 'admin'";

 if (mysql_query($sql)) {

    $_SESSION = array();
    session_destroy();
    setcookie('PHPSESSID','',time()-3600,'/');
    //去掉session修改后可以不进入后台主页。

 		echo '<script>top.location ="login.php"</script>';
 }