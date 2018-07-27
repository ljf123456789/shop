<?php

    include '../lock.php';
error_reporting(0);
 include '../../public/common/config.php';

 $name = $_POST['name'];


 $sql = "insert into class(name) value('{$name}')";

 if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
?>