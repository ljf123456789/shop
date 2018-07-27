
<?php 
      //不显示错误信息
error_reporting(0);

session_start(); 

include '../../public/common/config.php';

$id=$_GET['id'];

$sql="select * from touch where id={$id}";
$rst=mysql_query($sql);
$row=mysql_fetch_assoc($rst);



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
                <div class="zhongbiaodan">
                <div class="biaodant"><img src="../public/img/bj2.jpg"></div>
                
                <div class="biaodan">
                <form action="userupdate.php" method="post">
                  <p><b>姓名</b></p>
                  <p><input type="text" name="name"  value="<?php echo $row['name'];?>" /></p>
                  <p><b>地址</b></p>
                   <p><input type="text" name="addr" value="<?php echo $row['addr'];?>" /></p>
                  <p><b>电话</b></p>
                   <p><input type="text" name="tel"   value="<?php echo $row['tel'];?>"/></p>
                  <p><b>邮箱</b></p>
                    <p><input type="text" name="email" value="<?php echo $row['email'];?>" /></p>

                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                 <p><input type="submit" name="确认修改" /></p>
                  </form>
                </div>
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