<?php 
$hostname = "localhost";
$dbname="demo_ph30121";
$username="root";
$password="";
try{
    $connet = new PDO("mysql: host=$hostname; dbname=$dbname",$username,$password);
    $connet -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected ";
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>