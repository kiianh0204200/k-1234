<?php
    $hostname='localhost';
    $db_name='pro_crub';
    $username='root';
    $password="";
    // Dựng đối tương PDO
    try{
        $connect=new PDO("mysql:host=$hostname;dbname=$db_name",$username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "ket noi thanhf cong";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>