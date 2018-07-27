<?php
      //不显示错误信息
error_reporting(0);
session_start();

include '../../public/common/config.php';

$user_id=$_SESSION['home_userid'];
$sql="select * from touch where user_id = {$user_id}";
$rst=mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>分类页面</title>
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">
</head>

<body>
   <div class="main">

       

 
<?php
   include '../header.php';
?>




       <div class="nav"></div>

       <div class="content">
           <div class="floor">
              <div class="floorheader">
                 <div class="left"> 
                     <span><a href="index.php">个人中心</a>&raquo;</span>
                     
                 </div>
               

     </div>
     <div class="nav"></div>

     <div class="floorFooter2">
                <div class="floorFooter2left">
                <ul>
              <li><a href="userlist.php">查看联系方式</a></li>
                 <li><a href="useradd.php">添加联系方式</a></li>
                  <li><a href="orderlist.php">查看我的订单</a></li>


                </ul>
                	
                </div>
                <div class="floorFooter2right">
                <table width="95%" >
                <tr>
                  <th>姓名</th>
                  <th>地址</th>
                  <th>电话</th>
                  <th>邮箱</th>
                  <th>修改</th>
                  <th>删除</th>
                </tr>
                

                <?php

                  while ($row=mysql_fetch_assoc($rst)) {
               
                echo " <tr>
                 <td>{$row['name']}</td>
                 <td>{$row['addr']}</td>
                 <td>{$row['tel']}</td>
                 <td>{$row['email']}</td>
                 <td><a href='useredit.php?id={$row['id']}'>修改</a></td>
                 <td><a href='userdel.php?id={$row['id']}'>删除</a></td>
                 </tr>";
                 }


                  ?>
                   
              
                  
                </table>
                </div>
     	

        


     </div>
 
         
 
<div class="clean"></div>

</div>
</div>









<?php
include '../footer.php';
?>


</div>


</body>
</html>