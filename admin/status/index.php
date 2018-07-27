<?php

 include '../lock.php';
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';

   $sql = "select * from status";
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
    		<th>名称</th>
    	
    		<th>修改</th>
    		<th>删除</th>
    	</tr>
    	<?php
    	while ($row = mysql_fetch_assoc($rst)) {
    		echo "<tr>";
    		echo " <td>{$row['id']}</td>";
    		echo "<td>{$row['name']}</td>";
    		
    		echo "<td><a href = 'edit.php?id={$row['id']}'>修改</a></td>";
            if ($row['id']==1) {
              echo "<td><a href = 'javascript:' style='background:#888'>删除</a></td>";
            }else{
                echo "<td><a href = 'delete.php?id={$row['id']}'>删除</a></td>";
            }
    	
    		echo "</tr>";
    	
    	}



    	?>


    </table>

 </div>

</body>
</html>












    