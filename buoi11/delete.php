<?php 
require "connet.php";
$user_id=(int)$_GET['id'];
$sql="DELETE FROM `bang_1` WHERE `user_id`=$user_id";
$connet->exec($sql);
header("location:list.php");
?>