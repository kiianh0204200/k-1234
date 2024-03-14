<?php
require "connect.php";
$sql="SELECT * FROM `hocsinh`";
$data=$connect ->query($sql);
$lisths=$data ->fetchAll();
// print_r($lisths);
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
        }
        table tbody tr th{
            border:2px solid green;
            padding: 5px 20px;
        }
        
        a{
            border:2px solid green;
            padding: 5px 20px;
            margin: 50px;
        }
        table{
            margin-top:50px;
        }
    </style>
</head>
<body>
    <h3>danh sach hoc sinh</h3>
    <a href="add.php"> THem </a>
    <table>
        <thead>
            <tr>
                <th>id_hocsinh</th>
                <th>ten Hoc Sinh</th>
                <th>Ten phu huynh</th>
                <th>MonHoc</th>
                <th>them</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lisths as $hs){
            ?>
            <tr>
                <th><?php echo $hs["hs_id"] ?></th>
                <th><?php echo $hs["tenhs"] ?></th>
                <th><?php echo $hs["tenph"] ?></th>
                <th><?php echo $hs["ma_mh"] ?></th>
                <th><a href="delete.php?id=<?php echo $hs["hs_id"] ?>">xoa</a>
                <a href="edit.php?id=<?php echo $hs["hs_id"] ?>">sua</a>
            </th>
            </tr>
             
            <?php
            }
            ?>
               
        </tbody>
    </table>
</body>
</html>