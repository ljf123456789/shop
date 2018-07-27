<?php
  
    include '../lock.php';
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
$code = $_GET['code'];
$status_id = $_GET['status_id'];

$sql = "select * from status";
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
  <form action="update.php" method="post">
  <p>订单号:</p>
  	<p><input type="text" name="code" value="<?php echo $code;?>"></p>
  	<p>选择状态：</p>
  	<p>
  		<select name="status_id">
  			<?php

  			while($row = mysql_fetch_assoc($rst)){

  				if ($status_id==$row['id']) {
  						echo "<option  selected value='{$row['id']}' >{$row['name']}</option>";
  				}else{

  					echo "<option value='{$row['id']}'>{$row['name']}</option>";
  				}
  			
                                                }
  			?>
  		</select>
  	</p>
  
  
  	<p><input type="submit" value="修改"></p>

  </form>
  </div>

</body>
</html>