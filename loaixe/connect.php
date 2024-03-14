<?php
$hostname="localhost";
$dbname="xeoto";
$username="root";
$password="";
try{
    $connect = new PDO("mysql: host=$hostname; dbname=$dbname",$username,$password );
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected";

} catch(PDOException $e){
    echo $e->getMessage();
}
?>