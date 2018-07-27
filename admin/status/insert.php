<?php
 include '../lock.php';
error_reporting(0);
 include '../lock.php';
 include '../../public/common/config.php';

 $name = $_POST['name'];


 $sql = "insert into status(name) value('{$name}')";

 if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
?>