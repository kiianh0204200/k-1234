<?php
require "connect.php";
$sql="SELECT * FROM `sanpham`";
$data=$connect->query($sql);
$listch=$data->fetchAll();
print_r($listch)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                        table thead tr th{
            border:2px solid green;
            padding: 5px 20px;
            background-color: red ;
        }
        table tbody tr th{
            border:2px solid green;
            padding: 5px 20px;
        }
        
        .add{
            border:2px solid green;
            padding: 5px 20px;
            margin: 50px;
        }
        table{
            margin-top:50px;
            margin: auto;
        }
        .container{
            width: 980px;
            margin: auto;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <h3> List</h3>
    <table>
        <thead>
            <tr>
            <th> id_sp</th>
            <th>ten san pham</th>
            <th>so luong</th>
            <th>anh</th>
            <th>loai</th>
            <th>them</th>
            <th>xoa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listch as $li){

            
            ?>
            <tr>
            <th><?php echo $li['id_sp'] ?></th>
            <th><?php echo $li['Tensp'] ?></th>
            <th><?php echo $li['soluong'] ?></th>
            <th><img src="<?php echo $li['anh'] ?>" width='50' height="50" alt=""></th>
            <th><?php echo $li['Masp'] ?></th>
            <th><a href="edit.php?id=<?php echo $li['id_sp']?>">Them</a></th>
            <th><a href="delete.php?id=<?php echo $li['id_sp']?>">Xoa</a></th>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>