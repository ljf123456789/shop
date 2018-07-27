
<?php

    include '../lock.php';
 error_reporting(0);
 include '../../public/common/config.php';

 $id = $_GET['id'];
 $sql = "select * from class where id = {$id}";
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
  <p>商品类别名称:</p>
  	<p><input type="text" name="name" value="<?php echo $row['name']?>"></p>


    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  	<p><input type="submit" value="修改"></p>

  </form>
  </div>

</body>
</html>
