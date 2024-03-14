<?php
require "connect.php";
$sql="SELECT * FROM `diemthoai`";
$data=$connect->query($sql);
$listdienthoai=$data->fetchAll();
print_r($listdienthoai);
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
    <div class="container">
    <h3> danh sach dien thoai</h3>
    <a class="add" href="add.php">add</a>
    <table>
        <thead>
            <tr>
                <th>id_dienthoai</th>
                <th> ten dien thoai</th>
                <th> gia</th>
                <th>so luong</th>
                <th>anh</th>
                <th>mau</th>
                <th>loai</th>
                <th>Them</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ( $listdienthoai as $dt){

             
            ?>
            <tr>
                <th><?php echo $dt['madt'] ?></th>
                <th><?php echo $dt['tendt'] ?> </th>
                <th><?php echo $dt['gia'] ?> </th>
                <th><?php echo $dt['soluong'] ?> </th>
                <th> <img src="<?php echo $dt['anh'] ?>" width='50' height="50" alt=""></th>
                <th><?php echo $dt['mau'] ?></th>
                <th><?php echo $dt['maloai'] ?></th>
                <th><a href="delete.php?id=<?php echo $dt["madt"]?>">xoa</a><a href="edit.php?id=<?php echo $dt["madt"]?>">sua</a></th>
            </tr>
           
            <?php
             }
            ?>
                
        </tbody>
    </table>
    </div>
    
</body>
</html>