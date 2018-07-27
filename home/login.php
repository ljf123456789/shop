<?php
      //不显示错误信息
error_reporting(0);

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

       <div class="dlcontent">
          
   
     <div class="login">

         <div class="loginform">
         <form action="check.php" method="post">
     
         <p><input type="text" name="username" placeholder="请输入用户名"></p>
      
         <p><input type="password" name="password" placeholder="请输入密码"></p>
           <p><input type="submit" value="登录"></p>

         </form>
           </div>

         </div>
        
     </div>


<div class="nav"></div>







<?php
include 'footer.php';
?>


</div>


</body>
</html>