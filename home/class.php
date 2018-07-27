<?php

      //不显示错误信息
error_reporting(0);
session_start();
 include '../public/common/config.php';

 $id=$_GET['class_id'];



 $sqlClass ="select * from class where id={$id}";

 $rstClass=mysql_query($sqlClass);
 $rowClass=mysql_fetch_assoc($rstClass);

?>




<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>分类页面</title>
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
</head>

<body>
   <div class="main">

       <?php
       include 'header.php';

       ?>

       <div class="nav"></div>

       <div class="content">
           <div class="floor">
              <div class="floorheader">
                 <div class="left"> 
                     <span><a href="index.php">首页</a>&raquo;<?php echo $rowClass['name']?></span>
                     
                 </div>
                 <div class="right"> 
                 <?php
                 $sqlBrand = "select * from brand where class_id={$id}";
                 $rstBrand=mysql_query($sqlBrand);
                 $firstBrand = '';
                 $i=0;
                 while ($rowBrand=mysql_fetch_assoc($rstBrand)) {

                  if($i==0){
                  $firstBrand=$rowBrand['id'];
                   }
                 
            echo "
                   <span>
                      <a href='class.php?class_id={$id}&brand_id={$rowBrand['id']}'>
                      {$rowBrand['name']}
                     </a>
                 </span>";
                 $i++;           
               }

                 ?>
             

         </div>


     </div>
     <div class="floorfooter2">
     <?php
     $brand_id = $_GET['brand_id']?$_GET['brand_id']:$firstBrand;
     $sqlShop = "select * from shop where brand_id={$brand_id}";
     $rstShop=mysql_query($sqlShop);
     while ($rowShop=mysql_fetch_assoc($rstShop)) {
  
    

     ?>
      <a href="shop.php?shop_id=<?php echo $rowShop['id']?>">
         <div class="shop">
            <div class="shopimg">
               <img src="../public/uploads/thumb_<?php echo $rowShop['img']?>">
           </div>
           <div class="nav"></div>
           <div class="shopinfo">
               
               <span class="shopname"><?php echo $rowShop['name']?></span>
               <span class="shopprice"><?php echo $rowShop['price']?></span>
           </div>
       </div>
   </a>


   <?php }?>
   
</div>
</a>
<div class="clean"></div>








</div>



<?php
include 'footer.php';
?>


</div>


</body>
</html>