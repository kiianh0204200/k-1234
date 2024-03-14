<?php
require "connect.php";
$dt_id=(int)$_GET['id'];
$sql="SELECT `madt`, `tendt`, `gia`, `soluong`,`mau`, `maloai` FROM `diemthoai` WHERE `diemthoai`.`madt`={$dt_id}";
$data=$connect->query($sql);
$dienthoai=$data->fetch();
print_r($dienthoai);

$sql="SELECT * FROM `loai`";
$data=$connect->query($sql);
$listloai=$data->fetchAll();
// print_r($listloai);
if(isset($_POST['btn_re'])){
    $tendienthoai=$_POST['ten'];
    $gia=$_POST['g'];
    $soluong=$_POST['sl'];
    $mau=$_POST['m'];
    $maloai=$_POST['maloai'];
    $sql="UPDATE `diemthoai` SET `tendt` = '{$tendienthoai}', `gia` = '{$gia}', `soluong` = '{$soluong}', `mau` = '{$mau}',`maloai` = '{$maloai}' WHERE `diemthoai`.`madt` = {$dt_id}";
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
    <form action="" method="post">
        <label for=""> ten dien thoai</label>
        <input type="text" name="ten" id="" value="<?php echo $dienthoai['tendt'] ?> "> <br><br>
        <label for="">gia</label>
        <input type="text" name="g" id="" value="<?php echo $dienthoai['gia']?>"> <br><br>
        <label for="">soluong</label>
        <input type="text" name="sl" id=""  value="<?php echo $dienthoai['soluong']?>"> <br><br>
        <label for="">mau</label>
        <input type="text" name="m" value="<?php echo $dienthoai['mau'] ?>"> <br><br>
        <select name="maloai" id="">
            <option value="">chon</option>
            <?php 
            foreach ($listloai as $loai){
            ?>
            <option value="<?php echo $loai['maloai'] ?>" <?php  if($loai['maloai']=$dienthoai['maloai']) echo "selected"?> ><?php echo $loai['tenloai'] ?> </option>
            <?php
            }
            ?>
        </select><br><br>
        <input type="submit" name="btn_re" id="" value="ADD">
    </form>
</body>
</html>