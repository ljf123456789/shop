<?php
session_start();

$id=$_GET['id'];

unset($_SESSION['shops'][$id]);

echo "<script>location='index.php'</script>";



?>