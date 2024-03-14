
<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$error=[];
if(empty($_POST['user'])){
    $error['user'] = "khong duoc de trong ten dang nhap";
}
if(empty($_POST['pass'])){
    $error['pass'] = "khong duoc de trong ten mat khau";
}
if(empty($error)){
    $usename=$_POST['user'];
    $password=$_POST['pass'];
    echo " ten dang nhap: {$usename} , {$password}";
}

// if(isset($_POST['btn-login'])) {
  
//     echo "Ten dang nhap la: {$_POST['user']} Mat khau: {$_POST['pass']}";

// }
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
    <h3> Dang nhap</h3>
    <form action="" method="post">
        <label for="">ten dang nhap</label> <br>
        <input type="text" name="user"> <br>

        <input type="password" name=" pass" id="">
        
        <input type="submit" name="btn-login" value="Dang Nhap">
    </form>
</body>
</html>