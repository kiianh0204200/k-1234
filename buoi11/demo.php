<?php 
require "connet.php";
if(isset($_POST['btn_re'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $sql="INSERT INTO `bang_1` ( `username`, `password`, `email`) VALUES ( '{$username}', '{$password}', '{$email}');";
    $connet-> exec($sql);
    header("location:list.php");
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
    <form action="" method="POST">
    <label for="">username</label>
    <input type="text" name="user" id=""> <br> <br>
    <label for=""> password</label>
    <input type="password" name="pass" id=""><br> <br>
    <label for="">Email</label>
    <input type="text" name="email"><br> <br>
    <input type="submit" name="btn_re" value="add" >
    </form>
  

</body>
</html>