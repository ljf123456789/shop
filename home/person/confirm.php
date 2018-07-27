<?php

include '../../public/common/config.php';

$code=$_GET['code'];
$confirm=1;

$sql="update indent set confirm={$confirm} where code='{$code}'";

if(mysql_query($sql)){
	echo "<script>location='orderlist.php'</script>";
}



?>