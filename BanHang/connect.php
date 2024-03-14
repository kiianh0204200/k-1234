<?php 
$hostname = "localhost";
$dbname="ph30121_examphp11";
$username="root";
$password="";
try{
    $connect = new PDO("mysql: host=$hostname; dbname=$dbname",$username,$password);
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected ";
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>