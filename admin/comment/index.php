<?php

    include '../lock.php';
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
   $sql = "select comment.*,user.username,shop.name from comment,user,shop where comment.user_id = user.id and comment.shop_id = shop.id";
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
    		<th>用户</th>
            <th>商品</th>
            <th>评论</th>
            <th>时间</th>
    		<th>删除</th>
    	</tr>
    	<?php
    	while ($row = mysql_fetch_assoc($rst)) {
    		echo "<tr>";
    		echo " <td>{$row['id']}</td>";
    		echo "<td>{$row['username']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['content']}</td>";
            echo "<td>".date('Y-m-d',$row['time'])."</td>";
    		echo "<td><a href = 'delete.php?id={$row['id']}'>删除</a></td>";
    		echo "</tr>";
    	
    	}



    	?>


    </table>

 </div>

</body>
</html>












    