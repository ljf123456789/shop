<?php

    include '../lock.php';
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
   $sql = "select shop.*,brand.name bname,class.name cname from  shop ,brand,class where brand.class_id=class.id and shop.brand_id = brand.id";
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
            <th>图片</th>
            <th>价格</th>
            <th>库存</th>
    	    <th>货架</th>
            <th>品牌</th>
            <th>分类</th>
    		<th>修改</th>
    		<th>删除</th>
    	</tr>
    	<?php
    	while ($row = mysql_fetch_assoc($rst)) {
    		echo "<tr>";
    		echo " <td>{$row['id']}</td>";
    		echo "<td>{$row['name']}</td>";
    		echo "<td><img src = '../../public/uploads/{$row['img']}' width = '50px' height = '50px'></td>";
            echo "<td>￥ {$row['price']}</td>";
            echo "<td>{$row['stock']}</td>";
            if($row['shelf'] == 1){
            echo "<td>上架</td>";}
            else{
                echo "<td>下架</td>";
            }
            echo "<td>{$row['bname']}</td>";
            echo "<td>{$row['cname']}</td>";
    		echo "<td><a href = 'edit.php?id={$row['id']}'>修改</a></td>";
    		echo "<td><a href = 'delete.php?id={$row['id']}&img={$row['img']}'>删除</a></td>";
    		echo "</tr>";
    	
    	}



    	?>


    </table>

 </div>

</body>
</html>












    