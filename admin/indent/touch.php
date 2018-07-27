<?php
  
    include '../lock.php';
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';

 $touch_id = $_GET['touch_id'];
   $sql = "select * from touch where id={$touch_id}";
  $rst = mysql_query($sql);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
	
</head>
<body>
<div class="main">

    <table>
    	<tr>
    		
    		<th>编号</th>
            <th>姓名</th>
            <th>地址</th>
            <th>电话</th>
    	    <th>邮箱</th>
    		
    	</tr>
    	<?php
    	while ($row = mysql_fetch_assoc($rst)) {

          
    		echo "<tr>";
    		echo "<td>{$row['id']}</td>";
    		echo "<td>{$row['name']}</td>";
            echo "<td>{$row['addr']}</td>";
            echo "<td>{$row['tel']}</td>";
            echo "<td>{$row['email']}</td>";
           
    		echo "</tr>";
    	
    	}



    	?>


    </table>

 </div>

</body>
</html>












    