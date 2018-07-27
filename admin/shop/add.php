
<?php
    include '../lock.php';
?>

<?php
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
   $sql = "select * from class";
  $rst = mysql_query($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>添加</title>
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">


</head>
<body>
<div class="main">
  <form action="insert.php" method="post" enctype="multipart/form-data">
  <p>商品名称:</p>
  	<p><input type="text" name="name"></p>
     <p>商品价格:</p>
    <p><input type="text" name="price"></p>
     <p>商品库存:</p>
    <p><input type="text" name="stock"></p>
     <p>货架:</p>
    <p>
    <label>
      <input type="radio" name="shelf" value="1" checked>上架
      </label>
       <label>
      <input type="radio" name="shelf" value="0">下架
       </label>
    </p>
     <p>商品品牌:</p>
   <p> <select name="brand_id">
   <?php 
                   
          $sqlClass = 'select * from class';
          $rstClass = mysql_query($sqlClass);
          while ($rowClass = mysql_fetch_assoc($rstClass)) {
            echo "<option disabled >{$rowClass['name']}</option>";
            
            $sqlBrand = "select * from brand where class_id = {$rowClass['id']}";
            $rstBrand = mysql_query($sqlBrand);
            while ($rowBrand = mysql_fetch_assoc($rstBrand)) {
               echo "<option value = '{$rowBrand['id']}'>|--{$rowBrand['name']}</option>";
            
            }
          }



   ?>
     
   </select></p>
    
    <p>图片</p>
    <p><input type="file" name="img"></p>

  	
  
  	<p><input type="submit" value="添加"></p>

  </form>
  </div>

</body>
</html>