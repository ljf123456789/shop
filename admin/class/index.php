<?php
  
    include '../lock.php';
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';


//   //每页条数
//   $length = 3;

//   //计算当前页 

//  $page = $_GET['p']?$_GET['p']:1;

//  //计算limit第一个参数值
//  $offset = ($page - 1) * $length;

//  //获取总行数
//  $sqlTot = "select count(*) from user";
//  $rstTot = mysql_query($sqlTot);
//  $rowTot = mysql_fetch_row($rstTot);
//  $totPages = $rowTot[0];

//  //把控上一页和下一页
//  $prevPage = $page - 1;
//  $nextPage = $page + 1;
//  $totPages = $ceil($totPages/$length);

//  //限制下一页
// if ($nextPage >= $totPages) {
// 	$nextPage = $totPages;
// }


// $sql = "select * from user limit $offset,$length";
   $sql = "select * from class";
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












    