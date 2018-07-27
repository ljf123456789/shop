<?php

    include '../lock.php';
error_reporting(0);
 include '../../public/common/config.php';
 include '../../public/common/function.php';

 $sname = $_POST['name'];
  $price = $_POST['price'];
   $stock = $_POST['stock'];
    $shelf = $_POST['shelf'];
     $brand_id = $_POST['brand_id'];



     //图片上传

     $src = $_FILES['img']['tmp_name'];
     $name = $_FILES['img']['name'];
     $ext = array_pop(explode('.', $name));
     $dst = '../../public/uploads/'.time().mt_rand().'.'.$ext;
    if(move_uploaded_file($src, $dst)){
    	//进行图片缩放200*200
    	thumb($dst,200,200);

        $img = basename($dst);

        $sql = "insert into shop(name,price,stock,shelf,brand_id,img)values('{$sname}','{$price}','{$stock}','{$shelf}','{$brand_id}','{$img}')";
         

         

         if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
    }
     


 



   
?>