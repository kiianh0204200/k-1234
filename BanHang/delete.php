<?php
require "connect.php";
$id=(int)$_GET['id'];
$sql="DELETE FROM sanpham WHERE `sanpham`.`id_sp` = {$id}";
$connect->exec($sql);
header("location:list.php"); 
?>
<?php
require "connect.php";
$id=(int)$_GET['id'];
$sql="DELETE FROM diemthoai WHERE `diemthoai`.`madt` = {$id}";
$connect->exec($sql);
header("location:list.php"); 
?>