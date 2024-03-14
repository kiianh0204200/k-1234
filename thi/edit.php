<?php
require("connect.php");
require("crud.php");
$sql = "SELECT * FROM `loai`";
$result =  selectAll($conn,$sql);
if(isset($_GET["id"])){
   $id  =$_GET["id"];
$resultedit =  selectAll($conn,"SELECT * FROM `dienthoai` WHERE madt=$id");

}
if(isset($_POST["btn"])){

   
      

      $tendt = $_POST["name"];
      $gia = $_POST["price"];
      $soluong = $_POST["count"];
      $mau = $_POST["color"]; 
      $maloai = $_POST["loai"];  
      insert($conn,"UPDATE `dienthoai` SET `tendt`='$tendt',`gia`='$gia',`soluong`='$soluong',`mau`='$mau',`maloai`='$maloai' WHERE madt=$id");
      header("location:list.php");

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
      <h2 style="text-align: center; margin:50px 0">Update Product</h2>
      <div class="mb-3 col-6">
         <label class="form-label">Name</label>
         <input type="text" class="form-control" value="<?php echo $resultedit[0]["tendt"]  ?>" name="name">

      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Price</label>
         <input type="number" class="form-control" value="<?php echo $resultedit[0]["gia"]  ?>" name="price">
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Count</label>
         <input type="number" class="form-control" value="<?php echo $resultedit[0]["soluong"]  ?>" name="count">
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Color</label>
         <input type="text" class="form-control" value="<?php echo $resultedit[0]["mau"]  ?>" name="color">
      </div>
      <div class="mb-3 col-6">
         <label class="form-label">Disabled select menu</label>
         <select class="form-select" name="loai">
            <option>----Chon----</option>
            <?php
            foreach($result as $loai){
            ?>
            <option <?php if($resultedit[0]["maloai"]===$loai["maloai"]) {echo "selected";} ?>
               value="<?php echo $loai["maloai"]  ?>"><?php echo $loai["tenloai"]  ?></option>
            <?php
              }
            ?>
         </select>
      </div>


      <button type="submit" name="btn" class="btn btn-warning">UPdate</button>
   </form>
</body>

</html>