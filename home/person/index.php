<?php
      //不显示错误信息
error_reporting(0);
session_start();
if(!$_SESSION['home_userid']){
  echo "<script>location='../login.php'</script>";
  exit;
}



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
            <!--     <li><a href="?c=userlist">查看联系方式</a></li>
                 <li><a href="?c=useradd">添加联系方式</a></li>
                  <li><a href="?c=orderlist">查看我的订单</a></li> -->
                	
                   <li><a href="userlist.php">查看联系方式</a></li>
                 <li><a href="useradd.php">添加联系方式</a></li>
                  <li><a href="orderlist.php">查看我的订单</a></li>


                </ul>
                	
                </div>
                <div class="floorFooter2right">
<!-- 

控制器来进行页面的跳转
                <?php
                $c=$_GET['c']?$_GET['c']:'wel';

                switch ($c) {
                  case "wel":
                  $str=<<<X
                    <h3>欢迎进入个人空间</h3>
                <div class="mao">
                <img src="../public/img/bj.jpg">
                  </div>
                </div>
X;

//适合长篇幅的进行输出

                   echo $str;
                 
                    break;

                    case "userlist":
                    echo "查看用户信息！！";
                    break;

                    case "useradd":
                      echo "添加用户信息！！";
                      break;

                    case "orderlist":
                      include  'orderlist.php';
                      break;
               
                }
                ?> -->
                     <h3>欢迎进入个人空间</h3>
                <div class="mao">
                <img src="../public/img/bj.jpg">
                  </div>
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