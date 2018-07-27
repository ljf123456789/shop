<?php

    include '../lock.php';
error_reporting(0);
 include '../../public/common/config.php';

 $name = $_POST['name'];
 $class_id = $_POST['class_id'];


 $sql = "insert into brand(name,class_id) value('{$name}','{$class_id}')";

 if (mysql_query($sql)) {
 	echo '<script>location ="index.php"</script>';
 
 }
?>