 <?php 


session_start();

$arr=$_SESSION['shops'];

$_SESSION=array();

$_SESSION['shops']=$arr;



echo '<script>location="login.php"</script>';





  ?>