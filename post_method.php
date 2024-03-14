<?php
if (isset($_POST['btn_login'])) {
    $error = [];
    //check user 
    if (empty($_POST['user'])) {
        $error['user'] = "Khong duoc de trong ten dang nhap";
    }
    else{
        $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
        if(!preg_match($partten,$_POST['user'])){
            $error['user']=" Ten dang nhap khong dung dinh danh";
        } else{
            $user = $_POST['user'];
        }
    }
   
    //check pass
    // if (empty($_POST['password'])) {
    //     $error['password'] = "Khong duoc de trong mat khau";
    // } else {
    //     $password = $_POST['password'];
    // }

}
//check city
if (empty($_POST['city'])) {
    $error['city'] = "Ban chua chon dia chi";
}
if (empty($error)) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    echo "Ten dang nhap la: {$_POST['user']} Mat khau: {$_POST['password']} Dia chi: {$_POST['city']}";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <style>
  p{
    color:red;
 }
    </style>
</head>
<body>
    <h3>Account</h3>
    <form action="" method="POST">

        <label for="">Ten Dang Nhap</label> <br>
        <input type="text" name="user" value="" id=""> <br>
        <?php

        if (!empty($error['user'])) {
            echo "<p>  {$error['user']}</p>";
        }
        ?>

        <label for="">Mat Khau</label> <br>
        <input type="password" name="password" id=""> <br>
        <?php
        if (!empty($error['password'])) {
            echo "<p> {$error['password']} </p>";
        }
        ?>

        <label for="">Address</label>
        <select name="city" id="">
            <option value="">---Lua Chon---</option>
            <option value="Ha Noi"> <?php if(isset($city)&&$city=="Ha Noi") echo "selected"?>Ha Noi</option>
            <option value="Thai Nguyen"><?php if(isset($city)&&$city=="Thai Nguyen")  echo "selected"?>Thai Nguyen</option>
            <option value="Hai Phong"><?php if(isset($city)&&$city=="Hai Phong")  echo "selected"?>Hai Phong</option>
        </select> <br> <br>
        <?php
        if (!empty($error)) {
            echo "<p> $error[city] </p>";
        }
        ?>
        <input type="submit" name="btn_login" id="" value="Login"> <br>
    </form>
</body>

</html>