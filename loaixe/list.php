<?php
require "connect.php";
$sql="SELECT * FROM `danhsachxe`";
$data=$connect->query($sql);
$listxe=$data->fetchAll();
// print_r($listxe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
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
    <h3>Danh Sach Xe O to</h3>
    <a class="add" href="add.php">Them</a>
    <table>
        <thead>
            <tr>
                <th>id_xe</th>
                <th>Ten Xe</th>
                <th>Mau xe</th>
                <th>Loai xe</th>
                <th>Them</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($listxe as $xe){
            ?>
             <tr>
             <th><?php echo $xe["id_xe"] ?></th>
                <th><?php echo $xe["tenxe"] ?></th>
                <th><?php echo $xe["mauxe"] ?></th>
                <th><?php echo $xe["maxe"] ?></th> 
                <th><a href="delete.php?id=<?php echo $xe['id_xe'] ?>">Xoa</a>
                <a href="edit.php?id=<?php echo $xe['id_xe'] ?>">Sua</a>
                </th>
             </tr>
                
            <?php
            }
            ?>
        </tbody>
        
    </table>
    </div>
   
</body>
</html>