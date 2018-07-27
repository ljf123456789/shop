<?php
      //不显示错误信息
error_reporting(0);

session_start();
include '../../public/common/config.php';

$id=$_GET['id'];

$sql = "select *from shop where id={$id}";
$rst = mysql_query($sql);
$row = mysql_fetch_assoc($rst);


if($row['stock']>0){


//把商品放入购物车
$_SESSION['shops'][$id]=$row;

$_SESSION['shops'][$id]['num']=1;




echo "<script>location='index.php'</script>";

}else{


	echo "<script>alert('该货库存不足，商家在补货中。。。。')</script>";

echo "<script>location='../index.php'</script>";


}




?>