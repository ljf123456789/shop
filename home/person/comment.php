
<?php 

     //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';

 $code = $_GET['code'];
   $sql = "select indent.price,indent.num,shop.name,shop.img,indent.confirm,shop.id from indent,shop where indent.shop_id=shop.id and indent.code = '{$code}'";
  $rst = mysql_query($sql);



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
             <p>请发表评论</p>
             <form action="commentinsert.php" method="post">

             <p>
               
               <textarea name="content" class="PersonComment">
               </textarea>
             </p>
             <input type="hidden" name="shop_id" value="<?php echo $_GET['shop_id']?>">
               <p>
              <input type="submit" value="提交评论" class="commit">
              </p>
            	</form>

        


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