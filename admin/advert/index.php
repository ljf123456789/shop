<?php

    include '../lock.php';
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
   $sql = "select * from advert";
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
    		<th>图片</th>
            <th>位置</th>
            <th>url</th>
            <th>修改</th>
    	    <th>删除</th>
           
    	</tr>
    	<?php
    	while ($row = mysql_fetch_assoc($rst)) {
    		echo "<tr>";
    		echo " <td>{$row['id']}</td>";
    		echo "<td><img src = '../../public/uploads/{$row['img']}' width = '200px' ></td>";
            if($row['pos']==0){
                echo "<td>顶部</td>";}
                elseif($row['pos']==1){
                    echo "<td>底部</td>";
                }
            
            echo "<td>{$row['url']}</td>";
    		echo "<td><a href = 'edit.php?id={$row['id']}'>修改</a></td>";
    		echo "<td><a href = 'delete.php?id={$row['id']}&img={$row['img']}'>删除</a></td>";
    		echo "</tr>";
    	
    	}



    	?>


    </table>

 </div>

</body>
</html>












    