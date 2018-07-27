 
<?php


$path = $_SERVER['PHP_SELF'];

$arr = explode('/', $path);

$root = '/'.$arr[1];
// echo '<pre>';

//   print_r($arr);
// echo "<pre>";




//获取网站的项目名称防止更改原项目的名称

?>

<div class="header">
  
 <div class="headerlogo">
   <a href="<?php echo $root?>/home/index.php">
     <span>
      <img src="<?php echo $root?>/home/public/img/logo2.jpg">
    </span>
  </a>
</div>
<div class="headerleft"> 
  
  <span>buy商城</span>
  
</div>
<div class="headerright">
 <a href="<?php echo $root?>/home/index.php">首页</a>

 <?php
 if (!$_SESSION['home_userid']) {

 	echo "<a href='{$root}/home/login.php'>登录</a>";
 }else{

 	echo "<a href='{$root}/home/person/index.php'>欢迎{$_SESSION['home_username']}</a><a href='{$root}/home/logout.php'>退出</a>";
 }


 ?>
 <a href="<?php echo $root?>/home/regist.php">注册</a>
 <a href="<?php echo $root?>/home/person/index.php">个人中心</a>
 <a href="<?php echo $root?>/home/cart/index.php">购物车</a>
 
</div> </div>




