<?php

    // Thông tin cấu hình kết nối cơ sở dữ liệu
$host = 'localhost';
$db_name = 'duanmau-ph30121';
$username = 'root';
$password = '';

try {
    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);

    // Thiết lập chế độ báo lỗi và chế độ ngoại lệ cho PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Thực hiện các thao tác với cơ sở dữ liệu ở đây...
     echo "ket noi thanh cong";
    return $conn;
} catch (PDOException $e) {
    echo 'Lỗi kết nối cơ sở dữ liệu: ' . $e->getMessage();
}



?>