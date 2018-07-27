<?php

    include '../lock.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>添加</title>
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">


</head>
<body>
<div class="main">
  <form action="insert.php" method="post">
  <p>用户名:</p>
  	<p><input type="text" name="username"></p>
  	<p>密码:</p>
  	<p><input type="password" name="password"></p>
  	<p><input type="submit" value="添加"></p>

  </form>
  </div>

</body>
</html>