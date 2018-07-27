<?php

    include '../lock.php';

 error_reporting(0);
 include '../../public/common/config.php';

 $code = $_POST['code'];
  $status_id = $_POST['status_id'];


 $sql = "update indent set status_id = '{$status_id}' where code = '{$code}'";

 if (mysql_query($sql)) {
 		echo '<script>location ="index.php"</script>';
 }