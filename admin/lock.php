<?php
      //不显示错误信息
error_reporting(0);
  session_start();


  $path = $_SERVER['PHP_SELF'];

$arr = explode('/', $path);

$root = '/'.$arr[1];

  if (!$_SESSION['admin_userid']) {
  	echo "<script>location='{$root}/admin/login.php'</script>";
     exit;
  }



?>