<?php

    include '../lock.php';

 error_reporting(0);
 include '../../public/common/config.php';
 include '../../public/common/function.php';

 $pos = $_POST['pos'];
  $url = $_POST['url'];

     $id = $_POST['id'];
     $imgsrc = $_POST['imgsrc'];

     $imgerror = $_FILES['img']['error'];

     if ($imgerror===0) {

     	 //图片上传

     $src = $_FILES['img']['tmp_name'];
     $name = $_FILES['img']['name'];
     $ext = array_pop(explode('.', $name));
     $dst = '../../public/uploads/'.time().mt_rand().'.'.$ext;
    if(move_uploaded_file($src, $dst)){
    	//进行图片缩放200*200
    	thumb($dst,200,200);

    	//删除原图
    	$oldfile = "../../public/uploads/{$imgsrc}";
    	$oldfile2 = "../../public/uploads/thumb_{$imgsrc}";

    	unlink($oldfile);
    	unlink($oldfile2);

        $img = basename($dst);

        $sql = "update advert set pos='{$pos}',url='{$url}',img='{$img}' where id={$id}";
         

         

         if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
    }
     

     	
     }else{

     	$sql = "update advert set pos='{$pos}',url='{$url}' where id={$id} ";

     	   if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
                               }


     }
 


 ?>