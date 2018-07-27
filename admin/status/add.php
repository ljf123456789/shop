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
  <p>状态名称:</p>
  	<p><input type="text" name="name"></p>
  
  	<p><input type="submit" value="添加"></p>

  </form>
  </div>

</body>
</html>