<?php
    if(isset($_GET['btn_search'])){
        echo "Thông tin tìm kiếm là:{$_GET['content']}";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tìm kiếm</h3>
    <a href="?content=php1&btn_login=T%C3%ACm+ki%E1%BA%BFm">Click here</a>
    <!-- <form action="" method="GET">
        <input type="text" name="content">
        <input type="submit" name="btn_search" value="Tìm kiếm">
    </form> -->
</body>
</html>