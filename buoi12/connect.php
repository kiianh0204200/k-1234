<?php 
$hostname = "localhost";
$dbname="hocsinh_hs";
$username="root";
$password="";
try{
    $connect = new PDO("mysql: host=$hostname; dbname=$dbname",$username,$password);
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected ";
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>