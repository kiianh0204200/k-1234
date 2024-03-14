<?php
require "connect.php";
$id=(int)$_GET['id'];
$sql="DELETE FROM diemthoai WHERE `diemthoai`.`madt` = {$id}";
$connect->exec($sql);
header("location:list.php"); 
?>