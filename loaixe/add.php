<?php
require "connect.php";
$sql="SELECT * FROM `loaixe`";
$data=$connect->query($sql);
$listxe=$data->fetchAll();
print_r($listxe);
if(isset($_POST['btn_re'])){
    $tenxe=$_POST["tenxe"];
    $mauxe=$_POST["mauxe"];
    $loaixe=$_POST["loaixe"];
    $sql="INSERT INTO `danhsachxe`( `tenxe`, `mauxe`, `maxe`) VALUES ('{$tenxe}','{$mauxe}','{$loaixe}')";
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
        <input type="text" name="tenxe">
        <label for="">mau xe</label>
        <input type="text" name="mauxe">
        <select name="loaixe" id="">
        <option value="">Chon</option>
            <?php
            foreach ($listxe as $loaixe){
            ?>
            <option value="<?php echo $loaixe['maxe'] ?>"><?php echo $loaixe['tenxe'] ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" name="btn_re" value="dang ki">

    </form>
</body>
</html>