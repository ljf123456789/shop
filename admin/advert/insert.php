<?php

    include '../lock.php';
error_reporting(0);
 include '../../public/common/config.php';
 include '../../public/common/function.php';

 $pos = $_POST['pos'];
 $url = $_POST['url'];

     //图片上传

     $src = $_FILES['img']['tmp_name'];
     $name = $_FILES['img']['name'];
     $ext = array_pop(explode('.', $name));
     $dst = '../../public/uploads/'.time().mt_rand().'.'.$ext;
    if(move_uploaded_file($src, $dst)){
    	//进行图片缩放200*200
    	thumb($dst,200,200);

        $img = basename($dst);

        $sql = "insert into advert(pos,url,img) values('{$pos}','{$url}','{$img}')";
         

         

         if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
    }
     


 



   
?>