<?php

      //不显示错误信息
error_reporting(0);
session_start();

$_SESSION = array();

session_destroy();

setcookie('PHPSESSID','time()-3600','/');




echo '<script>location = "login.php"</script>';

?>