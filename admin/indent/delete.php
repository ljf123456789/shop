<?php

    include '../lock.php';
error_reporting(0);
 include '../../public/common/config.php';

$code = $_GET['code'];
$sql = "delete from indent where code = '{$code}'";

if (mysql_query($sql)) {

	echo '<script>location ="index.php"</script>';
}

?>