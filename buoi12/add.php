<?php 
require "connect.php";
$sql="SELECT * FROM `monhoc`";
$data=$connect->query($sql);
$listmon=$data->fetchAll();
// print_r($listmon);

if(isset($_POST['btn_re'])){
    $tenhs=$_POST['hs'];
    $tenph=$_POST['ph'];
    $lop=$_POST['lop'];
    $sql="INSERT INTO `hocsinh`( `tenhs`, `tenph`, `ma_mh`) VALUES ('{$tenhs}','{$tenph}','{$lop}')";
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
    <h2>dang ki</h2>
    <form action="" method="post">
        <label for=""> ten hoc sinh</label>
        <input type="text" name="hs">
        <label for=""> ten phu huynh</label>
        <input type="text" name="ph">
        <label for="">lop</label>
        <select name="lop" id="">
        
            <option value="">Chon</option>
        <?php 
        foreach ($listmon as $monhoc) {
        ?>
        <option value="<?php echo $monhoc['ma_mh'] ?>"> <?php echo $monhoc['tenmon'] ?></option>
            
        <?php }?>
           
        </select>
        <input type="submit" name="btn_re" value="dang ki">
    </form>
</body>
</html>