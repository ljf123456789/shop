<?php

      //不显示错误信息
error_reporting(0);
session_start();
 include '../public/common/config.php';

 $sqlAdvert = "select * from advert";
 $rstAdvert = mysql_query($sqlAdvert);

 while($rowAdvert = mysql_fetch_assoc($rstAdvert)){

  $rowAds[$rowAdvert['pos']] = $rowAdvert;
 }


?>




<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>buy商城</title>
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
</head>
<body>
   <div class="main">
     <!--   <div class="header">
        
           <div class="headerlogo">
             <a href="index.php">
               <span>
                  <img src="public/img/logo2.jpg">
              </span>
          </a>
      </div>
      <div class="headerleft"> 
        
          <span>buy商城</span>
          
      </div>
      <div class="headerright">
       <a href="index.php">首页</a>
       <a href="login.php">登录</a>
       <a href="regist.php">注册</a>
       <a href="./person/index.php">个人中心</a>
       <a href="./cart/index.php">购物车</a>
       
   </div>

</div> -->
<?php
   include './header.php';
?>
<div class="nav"></div>
<div class="ads">
   <img src="../public/uploads/<?php echo $rowAds[0]['img'];?>" />
</div>
<div class="nav"></div>
<div class="content">
    


     <?php 

         $sqlClass = "select * from class";
         $rstClass = mysql_query($sqlClass);

         $f = 1;
         while($rowClass=mysql_fetch_assoc($rstClass)){



  



     ?>


   <div class="floor">
      <div class="floorheader">
         <div class="left"> 
             <span><?php echo $f?>f <?php echo $rowClass['name']?></span>
             
         </div>
         <div class="right"> 
          <span>热销产品</span>
          <span><a href="class.php?class_id=<?php echo $rowClass['id']?>"> 更多</a></span>

      </div>

    

  </div>
  <div class="floorfooter">

  <?php

       $sqlShop = "select shop.* from shop,brand,class where shop.brand_id = brand.id and brand.class_id = class.id and class_id = {$rowClass['id']} and shop.shelf = 1 order by rand() limit 4";
       $rstShop = mysql_query($sqlShop);
       while($rowShop = mysql_fetch_assoc($rstShop)){



    
  ?>
      <a href="shop.php?shop_id=<?php echo $rowShop['id']?>">
         <div class="shop">
            <div class="shopimg">
               <img src="../public/uploads/thumb_<?php echo $rowShop['img'];?>">
           </div>
           <div class="nav"></div>
           <div class="shopinfo">
               
               <span class="shopname"><?php echo $rowShop['name'];?></span>
               <span class="shopprice"><?php echo  $rowShop['price'];?>元</span>
           </div>

        </div>

           <?php
                 }
           ?>
      
   </a>



</div>
</div>


 
  <?php

  $f++;

             }
      ?>



















</div>
<div class="nav"></div>
<div class="ads">
   <img src="../public/uploads/<?php echo $rowAds[1]['img'];?>" />
</div>
<div class="nav"></div>
<div class="footer">
   <ul>
      <li><a href="">关于我们</a></li>
      <li><a href="">联系我们</a></li>
      <li><a href="">产品中心</a></li>
      <li><a href="">公司地图</a></li>



  </ul>


</div>

</div>

</body>
</html>