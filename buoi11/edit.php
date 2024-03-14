<?php 
require "connet.php";
// lay user cua phan tử muốn edit
$user_id=(int)$_GET['id'];
$sql="SELECT `user_id`, `username`,  `email` FROM `bang_1` WHERE `user_id`=$user_id";
$data=$connet->query($sql);
$user=$data->fetch();
print_r($user);

if(isset($_POST['btn_re'])){
    $username=$_POST['user'];
    // $password=$_POST['pass'];
    $email=$_POST['email'];
    $sql="UPDATE `bang_1` SET `username` = '{$username}',  `email` = '{$email}' WHERE `bang_1`.`user_id` = {$user_id}";
    $connet->exec($sql);
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
    <form action="" method="POST"z`>
    <label for="">username</label>
    <input type="text" name="user" id="" value=<?php echo $user['username'] ?>> <br> <br>
    <!-- <label for=""> password</label>
    <input type="password" name="pass" id=""><br> <br> -->
    <label for="">Email</label>
    <input type="text" name="email"  value=<?php echo $user['email'] ?> ><br> <br>
    <input type="submit" name="btn_re" value="add" >
    </form>
  

</body>
</html>