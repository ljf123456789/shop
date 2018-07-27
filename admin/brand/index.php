<?php

    include '../lock.php';
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
   $sql = "select brand.*,class.name cname from brand,class where brand.class_id=class.id";
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
    		<th>品牌名称</th>
    	    <th>分类名称</th>
    		<th>修改</th>
    		<th>删除</th>
    	</tr>
    	<?php
    	while ($row = mysql_fetch_assoc($rst)) {
    		echo "<tr>";
    		echo " <td>{$row['id']}</td>";
    		echo "<td>{$row['name']}</td>";
    		echo "<td>{$row['cname']}</td>";
    		echo "<td><a href = 'edit.php?id={$row['id']}'>修改</a></td>";
    		echo "<td><a href = 'delete.php?id={$row['id']}'>删除</a></td>";
    		echo "</tr>";
    	
    	}



    	?>


    </table>
   <!--  <h3>
    	<a href="index.php?p=<?php echo $prevPage;?>">上一页</a>   ||
    	<a href="index.php?p=<?php echo $nextPage;?>">上一页</a> 


    </h3> -->
 </div>

</body>
</html>












    