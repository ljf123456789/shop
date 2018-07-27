<?php

    include '../lock.php';

 error_reporting(0);
 include '../../public/common/config.php';

 $name = $_POST['name'];
  $class_id = $_POST['class_id'];
 $id = $_POST['id'];

 $sql = "update brand set name = '{$name}' ,class_id = '{$class_id}' where id = {$id}";

 if (mysql_query($sql)) {
 		echo '<script>location ="index.php"</script>';
 }