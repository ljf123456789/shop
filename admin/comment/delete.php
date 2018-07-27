<?php

    include '../lock.php';
error_reporting(0);
 include '../../public/common/config.php';

$id = $_GET['id'];

$sql = "delete from comment where id = {$id}";

if (mysql_query($sql)) {

	echo '<script>location ="index.php"</script>';
}

?>