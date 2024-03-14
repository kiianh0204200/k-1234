<?php 
require "connet.php";
$sql="SELECT * FROM `bang_1`";
$data=$connet ->query($sql);
$listuser=$data ->fetchAll();
// print_r($listuser);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add.css">
    <style>
        table thead tr th{
            border-bottom:2px solid green;
            padding: 5px 20px;
        }
        table thead tr th{
            border-bottom:2px solid green;
            padding: 5px 20px;
        }
        .user{
            
        }
    </style>
</head>

<body>
<h3>danh sach thanh vien</h3>
<div class="user">
<a href="demo.php"> them user</a>
</div>
    <table>
        <thead>
            <tr>
                 <th> user_id</th>
                 <th> Ten dang nhap</th>
                <th> mat khau</th>
                <th>email</th>
                <th>thao tac</th>
            </tr>
           
        </thead>
        <tbody>
        <?php 
        foreach($listuser as $user){
        ?>
        <tr>
                 <th> <?php echo $user["user_id"] ?> user_id</th>
                 <th> <?php echo $user["username"] ?> Ten dang nhap</th>
                <th><?php echo $user["password"] ?> mat khau</th>
                <th> <?php echo $user["email"] ?>email</th>
                <td><a href="delete.php?id=<?php echo $user['user_id'] ?>">Xoa</a><a href="edit.php?id=<?php echo$user['user_id'] ?>">Sua</a></td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
  

</body>
</html>