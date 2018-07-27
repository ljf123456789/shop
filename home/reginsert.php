<?php 
//不显示错误信息
error_reporting(0);



 session_start();

include '../public/common/config.php';

 $username=$_POST['username'];
  $password=md5($_POST['password']);
  $repassword=md5($_POST['repassword']);
  $fcode = strtolower(md5($_POST['fcode']));

  $vcode=strtolower($_SESSION['verification']);

 


  if($fcode==$vcode){
  	if ($password==$repassword) {
  		$sql = "insert into user(username,password) values('{$username}','{$password}')";
  		if(mysql_query($sql)){
  			$_SESSION['home_username']=$username;
  			$_SESSION['home_userid']=mysql_insert_id();
  			echo "<script>location='person/index.php'</script>";
  		}

  		
  	}
  }else{
  	echo "<script>location='regist.php'</script>";
  }


 ?>