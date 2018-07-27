<?php

      //不显示错误信息
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>分类页面</title>
	<link rel="stylesheet" type="text/css" href="public/css/index.css">


  <script type="text/javascript">

function changing(){
    document.getElementById('checkpic').src="vcode.php?"+Math.random();
} 
  </script>
</head>

<body>
   <div class="main">

       


 <?php
 include 'header.php';

  ?>






       <div class="nav"></div>

       <div class="dlcontent">
          
   
     <div class="login">

         <div class="loginform2">
         <form action="reginsert.php" method="post">
     
         <p><input type="text" name="username" placeholder="用户名"></p>
      
         <p><input type="password" name="password" placeholder="密码"></p>
         <p><input type="password" name="repassword" placeholder="确认密码"></p>

         <p><input type="text" name="fcode" placeholder="验证码"></p>
         <p class="vcodeimg"><img id="checkpic" onclick="changing();" src='./vcode.php' />
            </p>
        
           <p><input type="submit" value="注册"></p>

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