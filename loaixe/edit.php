<?php
require "connect.php";
$id_sua=(int)$_GET['id'];
$sql="SELECT `id_xe`, `tenxe`,`mauxe`, `maxe` FROM `danhsachxe` WHERE `danhsachxe`.`id_xe`={$id_sua}";
$data=$connect->query($sql);
$xe=$data->fetch();
// print_r($xe);
$sql="SELECT * FROM `loaixe`";
$data=$connect->query($sql);
$listxe=$data->fetchAll();
// print_r($listxe);
if(isset($_POST['btn_re'])){
    $tenxe=$_POST["tenxe"];
    $mauxe=$_POST["mauxe"];
    $loaixe=$_POST["loaixe"];
    $sql="UPDATE `danhsachxe` SET `tenxe` = '{$tenxe}', `mauxe` = '{$mauxe}', `maxe` = '{$loaixe}' WHERE `danhsachxe`.`id_xe` = {$id_sua}";
//     $sql="INSERT INTO `danhsachxe`( `tenxe`, `mauxe`, `maxe`) VALUES ('{$tenxe}','{$mauxe}','{$loaixe}')";
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
    <h3> ADD XE O TO </h3>
    <form action="" method="post">
        <label for="">ten xe o to </label>
        <input type="text" name="tenxe" value="<?php echo $xe['tenxe'] ?>">
        <label for="">mau xe</label>
        <input type="text" name="mauxe" value="<?php echo $xe['mauxe'] ?>">
        <select name="loaixe" id="">
        <option value="">Chon</option>
            <?php
            foreach ($listxe as $loaixe){
            ?>
                    <option value="<?php echo $loaixe['maxe'] ?>"<?php  if($loaixe['maxe']=$xe['maxe']) echo "selected"?>><?php echo $loaixe['tenxe']?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" name="btn_re" value="dang ki">

    </form>
</body>
</html>