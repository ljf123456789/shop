<?php
//验证码函数

function vcode(){
     //开启session
	session_start();

	//1.创建画布
	$img = imagecreatetruecolor(150, 50);

	//2.准备颜色

	$black = imagecolorallocate($img, 0, 0, 0);
	$white = imagecolorallocate($img, 255, 255, 255);

	//3.在画布上画图像或者文字
	imagefill($img, 0, 0, $black);

	$arr = array_merge(range(0,9),range(a,z),range(A,Z));
	shuffle($arr);
	$rand = join('',array_slice($arr, 0,4));

	//把四位随机数放入session中，供其页面使用
	$_SESSION['vcode'] = $rand;

	imagettftext($img, 30, 0, 25, 40, $white, './msyh.ttf', $rand);


	for($i = 0;$i < 30;$i++){

		imageellipse($img, mt_rand(0,150), mt_rand(0,50), mt_rand(0,150), mt_rand(0,50), $white);

	}

	//4.输出最终的图像或者保存最终的图像

	header('content-type:image/jpeg');
	imagejpeg($img);

	//5.释放画布资源
	imagedestroy($img);


}


//图片缩放的函数

 function thumb($simg,$dw,$dh){

 	//原图大小
 	$arr = getimagesize($simg);
 	$sw = $arr[0];
 	$sh = $arr[1];
 	$st = $arr[2];
 	$sm = $arr['mime'];

 	switch ($st) {
 		case '1':
 		     $imagecreate = "imagecreatefromgif";
 		     $imageout = "imagegif";
 			break;
 		case '2':
 		      $imagecreate = "imagecreatefromjpeg";
 		      $imageout = "imagejpeg";

 			break;
 			case '3':
 				$imagecreate = "imagecreatefrompng";
 				$imageout = "imagepng";
 				break;
 	
 	}


 	//原图和目标图片资源
 	$simgr = $imagecreate($simg);

 	//等比例计算
 	if ($sw/$dw>$sh/$dh) {
 		$b = $sw/$dw;
 	}else{
 		$b = $sh/$dh;
 	}

 	$dw2 = floor($sw/$b);
 	$dh2 = floor($sh/$b);

 	//目标图片资源
 	$dimgr = imagecreatetruecolor($dw2, $dh2);

 	//开始缩放
 	imagecopyresampled($dimgr, $simgr, 0, 0, 0, 0, $dw2, $dh2, $sw, $sh);

 //保存到于原图同一个目录下

 	$dir = dirname($simg);
 	$file = basename($simg);
 	$save = $dir.'/'.'thumb_'.$file;
 	$imageout($dimgr,$save);
 }

?>