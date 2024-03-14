<?php
require "connect.php";
$sql="SELECT * FROM `loai`";
$data=$connect->query($sql);
$listloai=$data->fetchAll();
// print_r($listloai);


    if(isset($_POST['btn_re'])){
        $error = [];
        if (!empty($_POST['ten'])) {
            $error['ten'] = "Khong duoc de trong ";
        }
        if (empty($_POST['gia'])) {
            $error['gia'] = "Khong duoc de trong ";
        }
        if (empty($_POST['soluong'])) {
            $error['soluong'] = "Khong duoc de trong ";
        }
        $dir="anh/";
        $up_file=$dir.$_FILES['upfile']['name'];
        if(move_uploaded_file($_FILES['upfile']['tmp_name'],$up_file));
        $tendienthoai=$_POST['ten'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
        $anh=$up_file;
        $mau=$_POST['mau'];
        $maloai=$_POST['maloai'];
        $sql="INSERT INTO `diemthoai`( `tendt`, `gia`, `soluong`, `anh`, `mau`, `maloai`) VALUES ('{$tendienthoai}','{$gia}','{$soluong}','{$anh}','{$mau}','{$maloai}')";
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
    <title>add</title>

</head>
<body>
    <h3>add</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <label for=""> ten dien thoai</label>
        <input type="text" name="ten" id=""> <br><br>
        <?php

            if (!empty($error['ten'])) {
            echo "<p>  {$error['ten']}</p>";
            }
        ?>
        <label for="">gia</label>
        <input type="text" name="gia" id=""><br><br>
        <label for="">soluong</label>
        <input type="text" name="soluong" id=""><br><br>
        <label for="">anh</label>
        <input type="file" name="upfile" id=""><br><br>
        <label for="">mau</label>
        <input type="text" name="mau"><br><br>
        <select name="maloai" id="">
            <option value="">chon</option>
            <?php 
            foreach ($listloai as $loai){
            ?>
            <option value="<?php echo $loai['maloai'] ?>"><?php echo $loai['tenloai'] ?> </option>
            <?php
            }
            ?>
        </select><br><br>
        <input type="submit" name="btn_re" id="" value="ADD">
    </form>
</body>
</html>