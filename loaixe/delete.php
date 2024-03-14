<?php
require "connect.php";
$id=(int)$_GET['id'];
$sql="DELETE FROM danhsachxe WHERE `danhsachxe`.`id_xe` = {$id}";
$connect->exec($sql);
header("location:list.php");    
?>