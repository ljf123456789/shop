<?php

  include './lock.php';

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>left</title>

  <style type="text/css">
   *{
    font-family: 微软雅黑;
    text-decoration: none;

  }
  a{
   color: #0000ff;
 }
 h4{
   cursor: pointer;
   background: #272822;
   border-radius: 5px;
   text-align: center;
   color: #fff;
 }
 h4:hover{

   color: #aff;

 }
 div{
   display: none;
 }
 p{
   padding-left: 25px;
   background: #E4393C;
   border-radius: 5px;

 }
 p a{
  color: #fff;
 }

 
</style>
<script language="javascript" type="text/javascript" src = 'public/js/jquery-3.1.1.js'></script>


</head>
<body>
  
  <h4>用户管理</h4>
  <div>
    <p><a href="user/index.php" target="right">|-查看用户</a></p>
    <p><a href="user/add.php" target="right">|-添加用户</a></p>
  </div>


  <h4>分类管理</h4>
  <div>
    <p><a href="class/index.php" target="right">|-查看分类</a></p>
    <p><a href="class/add.php" target="right">|-添加分类</a></p>
  </div>

  <h4>品牌管理</h4>
  <div>
    <p><a href="brand/index.php" target="right">|-查看品牌</a></p>
    <p><a href="brand/add.php" target="right">|-添加品牌</a></p>
  </div>

  <h4>商品管理</h4>
  <div>
    <p><a href="shop/index.php" target="right">|-查看商品</a></p>
    <p><a href="shop/add.php" target="right">|-添加商品</a></p>
  </div>

  <h4>评论管理</h4>
  <div>
    <p><a href="comment/index.php" target="right">|-查看评论</a></p>
    
  </div>

  <h4>订单状态</h4>
  <div>
    <p><a href="status/index.php" target="right">|-查看状态</a></p>
    <p><a href="status/add.php" target="right">|-添加状态</a></p>
  </div>

  <h4>订单管理</h4>
  <div>
    <p><a href="indent/index.php" target="right">|-查看订单</a></p>
   
  </div>
    <h4> 广告管理</h4>
  <div>
    <p><a href="advert/index.php" target="right">|-查看广告</a></p>
    <p><a href="advert/add.php" target="right">|-添加广告</a></p>
  </div>

    <h4> 系统管理</h4>
  <div>
    <p><a href="logout.php"  target="_top" onclick="return confirm('您确定退出吗？')">|-退出系统</a></p>
    <p><a href="../home/index.php" target="_blank">|-网站首页</a></p>
    <p><a href="adminpass.php" target="right">-|修改口令</a></p>
  </div>


</body>

<script>
  $('h4').click(function(){
   $(this).next().toggle(500);
   $('div').not($(this).next()).hide();
   
 });


</script>

</html>