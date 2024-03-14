<?php
require "connect.php";
$sql="SELECT * FROM `cuahang`";
$data=$connect->query($sql);
$listcuahang=$data->fetchAll();
print_r($listcuahang);

if(isset($_POST['btn'])){
    $dir="anh/";
    $up_file=$dir.$_FILES['upfile']['name'];
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],$up_file));
    $tensanpham=$_POST['name'];
    $soluong=$_POST['SL'];
    $anh=$up_file;
    $ma_sp=$_POST['ma_sp'];
    $sql="INSERT INTO `sanpham`( `Tensp`, `soluong`, `anh`, `Masp`) VALUES ('$tensanpham','$soluong','$anh','$ma_sp')";
    $connect->exec($sql);
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
    <h3>Them San Pham</h3>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Ten San Pham</label>
    <input type="text" name="name" id=""><br><br>
    <label for="">soluong</label>
    <input type="text" name="Sl" id=""><br><br>
    <label for="">anh</label>
    <input type="file" name="upfile" id=""><br><br>
    <select name="ma_sp" id="">
        <option value="">
            chon
        </option>
        <?php
        foreach ($listcuahang as $cuahang){
        ?>
        <option value="<?php echo $cuahang['Masp'] ?>"><?php echo $cuahang['Tensanpham'] ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" name="btn" value="Them" >
</form>
</body>
</html>