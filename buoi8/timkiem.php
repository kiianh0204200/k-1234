<?php
if(isset($_GET['btn-login'])){
    echo "Ten dang nhap la: {$_GET['content']} Mat khau: {$_GET['btn-login']}";

} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>timkiem</h3>
    <a href="ok/buoi8/timkiem.php?+content=asaf&btn-login=timkiem">click</a>

    <form action="">
        <form action="" method="get">
            <input type="text" name=" content" id="">
            <input type="submit" name="btn-login" value="timkiem">
        </form>
    </form>
</body>
</html>