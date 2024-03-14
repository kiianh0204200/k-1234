<?php
require("connect.php");
require("crud.php");
$sql = "SELECT * FROM `loai`";
$result =  selectAll($conn,$sql);

if(isset($_POST["btn"])){

   
       $dir = "anh/";
       $up_file = $dir . $_FILES['image']['name'];
       if (move_uploaded_file($_FILES['image']['tmp_name'], $up_file)) {
           echo "A Picture Uploaded";
       } else {
           echo " Upload Failed";
       }
       $error = [];
       if($_POST["price"]<0){
         $error['price'] = "Không được để số âm";
       }
        if($_POST["count"]<0){
         $error['count'] = "Không được để số âm";
       }
       if(empty($error)){
          $tendt = $_POST["name"];
           $gia = $_POST["price"];
            $soluong = $_POST["count"];
             $anh = $up_file;
              $mau = $_POST["color"];
               $tenloai = $_POST["loai"];
  
               
              $sqlinser  ="INSERT INTO `dienthoai`(`tendt`, `gia`, `soluong`, `anh`, `mau`, `maloai`) VALUES ('$tendt','$gia','$soluong','$anh','$mau','$tenloai')";
           insert($conn,$sqlinser);
           header("location:list.php");

       }else{
 $tendt = $_POST["name"];
           $gia = $_POST["price"];
            $soluong = $_POST["count"];
             $anh = $_FILES['image']['name'];
              $mau = $_POST["color"];
               $tenloai = $_POST["loai"];
       }
       
      

}






?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <title>Document</title>
   <style>
   body {
      width: 100%;
      height: 100vh;
   }

   .add {
      width: 50%;
      margin: auto;
   }
   </style>
</head>

<body>

   <form class="row add" method="POST" enctype="multipart/form-data">
      <div class="" style="text-align: center; margin: 50px 0">
         <h2>Thêm Sản Phẩm</h2>
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Name</label>
         <input type="text" class="form-control"
            value="<?php  if(!empty($error["price"])||!empty($error["count"])) echo $tendt ?>" name="name">

      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Price</label>
         <input type="number" class="form-control"
            value="<?php  if(!empty($error["price"])||!empty($error["count"])) {echo $gia;}else{ echo 0;} ?>"
            name="price">
         <?php
         if(!empty($error['price'])){
            echo "<p style='color:red;'>{$error['price']}</p>";
         }
         ?>
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Count</label>
         <input type="number" class="form-control"
            value="<?php if(!empty($error["price"])||!empty($error["count"])) {echo $soluong;}else{ echo 0;} ?>"
            name="count">
         <?php
         if(!empty($error['count'])){
            echo "<p style='color:red;'>{$error['price']}</p>";
         }
         ?>
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Image</label>
         <input type="file" class="form-control" value="<?php echo $anh ?>" name="image">
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Color</label>
         <input type="text" class="form-control"
            value="<?php if(!empty($error["price"])||!empty($error["count"])) echo $mau ?>" name="color">
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Disabled select menu</label>
         <select class="form-select" name="loai">
            <option>----Chon----</option>
            <?php
            foreach($result as $loai){
            ?>
            <option value="<?php echo $loai["maloai"]  ?>">
               <?php echo $loai["tenloai"]  ?></option>
            <?php
              }
            ?>
         </select>
      </div>

      <button type="submit" name="btn" class="btn btn-primary">Submit</button>
   </form>
</body>

</html>