
<?php

 error_reporting(0);
  include '../lock.php';
 include '../../public/common/config.php';

 $id = $_GET['id'];
 $sql = "select * from user where id = {$id}";
 $rst = mysql_query($sql);
 $row = mysql_fetch_assoc($rst);


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>修改</title>
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">


</head>
<body>
<div class="main">
  <form action="update.php" method="post">
  <p>用户名:</p>
  	<p><input type="text" name="username" value="<?php echo $row['username']?>"></p>
  	<p>密码:</p>
  	<p><input type="password" name="password"></p>

    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  	<p><input type="submit" value="更新"></p>

  </form>
  </div>

</body>
</html>
