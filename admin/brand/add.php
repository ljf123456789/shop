<?php
  
    include '../lock.php';
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
   $sql = "select * from class";
  $rst = mysql_query($sql);
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
  <p>品牌名称:</p>
  	<p><input type="text" name="name"></p>
  	<p>选择分类：</p>
  	<p>
  		<select name="class_id">
  			<?php

  			while($row = mysql_fetch_assoc($rst)){
  			echo "<option value='{$row['id']}'>{$row['name']}</option>";
                                                }
  			?>
  		</select>
  	</p>
  
  	<p><input type="submit" value="添加"></p>

  </form>
  </div>

</body>
</html>