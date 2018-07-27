<?php

    include '../lock.php';
  
      //不显示错误信息
error_reporting(0);
 include '../../public/common/config.php';
 $id = $_GET['id'];

   $sql = "select * from advert where id = {$id} ";
  $rst = mysql_query($sql);
  $row = mysql_fetch_assoc($rst);
?>


<!DOCTYPE html>
<html>
<head>
  <title>添加</title>
  <link rel="stylesheet" type="text/css" href="../public/css/index.css">


</head>
<body>
<div class="main">
  <form action="update.php" method="post" enctype="multipart/form-data">
  <p>位置：</p>
    <p>
     <select name="pos">

     <?php

     switch ($row['pos']) {
       case 0:
              echo   "<option value='0' selected>顶部</option>";
              echo   "<option value='1'>底部</option>";
         break;
       
       case 1:
              echo   "<option value='0' >顶部</option>";
              echo   "<option value='1'selected>底部</option>";
         break;
       
     }




     ?>
       
     </select> 
    </p>

    <p>原图：</p>
    <p><img src="../../public/uploads/<?php echo $row['img'];?>" width="200px"></p>

       <p>图片</p>
    <p><input type="file" name="img"></p>

     <p>url：</p>
    <p><input type="text" name="url" value="<?php echo $row['url'];?>" style="width: 150px"></p>
     
  
    <p><input type="hidden" name="id"  value="<?php echo $row['id'];?>"></p>
    <p><input type="hidden" name="imgsrc"  value="<?php echo $row['img'];?>"></p>
   
    <p><input type="submit" value="修改"></p>

  </form>
  </div>

</body>
</html>