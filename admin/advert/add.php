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
  <form action="insert.php" method="post" enctype="multipart/form-data">
  <p>位置：</p>
  	<p>
     <select name="pos">
     <option value="0">顶部</option>
     <option value="1">底部</option>
       
     </select> 
    </p>
       <p>图片</p>
    <p><input type="file" name="img"></p>

     <p>url：</p>
    <p><input type="text" name="url"></p>
     
  
  	
  
  	<p><input type="submit" value="添加"></p>

  </form>
  </div>

</body>
</html>