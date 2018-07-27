<?php
      //不显示错误信息
error_reporting(0);
session_start();

include '../../public/common/config.php';

$confirm=$_GET['confirm'];



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

       


<!-- <div class="header">
  
 <div class="headerlogo">
   <a href="../index.php">
     <span>
      <img src="../public/img/logo2.jpg">
    </span>
  </a>
</div>
<div class="headerleft"> 
  
  <span>buy商城</span>
  
</div>
<div class="headerright">
  <a href="../index.php">首页</a>
 <a href="../login.php">登录</a>
 <a href="../regist.php">注册</a>
 <a href="index.php">个人中心</a>
 <a href="../cart/index.php">购物车</a>
 
 
</div> </div> -->


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
                  <th>订单号</th>
                  <th>下单时间</th>
                  <th>订单状态</th>
                  <th>确认收货</th>
                 
                </tr>

                <?php
                   $user_id=$_SESSION['home_userid'];

                   $sql="select indent.*,status.name from indent,status where indent.status_id=status.id and indent.user_id={$user_id} group by indent.code ";
                   $rst=mysql_query($sql);
                   while ($row=mysql_fetch_assoc($rst)) {
                    echo " <tr>";

                    echo "<td><a href='code.php?code={$row['code']}' class='cartNum' >{$row['code']}</a></td>";
                    echo   "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
                    echo  "<td>{$row['name']}</td>";

                      if ($row['confirm']) {
                        echo "<td><a href='code.php?code={$row['code']}' class='cartNum'>评论</a></td>";
                        
                      }else{
                       echo "<td><a href='confirm.php?code={$row['code']}' class='cartNum'>确认收货</a></td>";
                      }
                    
                    echo "</tr> ";
                     
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