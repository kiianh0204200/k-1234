<?php
require "connect.php";
$id=(int)$_GET['id'];
$sql="DELETE FROM hocsinh WHERE `hocsinh`.`hs_id` = {$id}";
$connect->exec($sql);
header("location:list.php"); 
?>