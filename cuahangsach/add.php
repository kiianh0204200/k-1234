<?php
require "connect.php";
$sql="SELECT * FROM `loaisach`";
$data=$connect->query($sql);
$litsadd=$data->fetchAll();
print_r($litsadd);
if(isset($_POST['btn'])){
    $dir="anh/";
    $up_file=$dir.$_FILES['upfile']['name'];
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],$up_file));
    $tensach=$_POST['ten'];
    $soluong=$_POST['sl'];
    $anh=$up_file;
    $masach=$_POST['masach'];
    $sql="INSERT INTO `sach`( `tensach`, `soluong`, `anh`, `masach`) VALUES ('{$tensach}','{$soluong}','{$anh}','{$masach}')";
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
    <h3>Them Sach</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Ten Sach</label>
        <input type="text" name="ten">
        <label for="">So Luong Sach</label>
        <input type="text" name="sl" id="">
        <label for="">Anh</label>
        <input type="file" name="upfile" id="">
        <select name="masach" id="">
        <option value="">chon</option>
        <?php
            foreach ($litsadd as $li){
        ?>
        <option value="<?php echo $li['masach'] ?>"><?php echo $li['tensach'] ?></option>
        <?php
            }
        ?>
        </select>
        <input type="submit" name="btn" value="them">
    </form>
</body>
</html>