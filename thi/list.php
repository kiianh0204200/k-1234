<?php
require("crud.php");
require("connect.php");
$result= selectAll($conn,"SELECT * FROM `dienthoai` INNER JOIN loai WHERE `dienthoai`.maloai=loai.maloai");
if(isset($_POST["btn"])){
   header("location:add.php");
}

if(isset($_GET["id"])){
   $id = $_GET["id"];
   delete($conn,"DELETE FROM `dienthoai` WHERE madt=$id");
   header("location:list.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   <title>Document</title>
</head>

<body>

   <form action="" method="POST">
      <h2 style="text-align: center;margin:50px 0">List Product</h2>
      <button type="submit" class="btn btn-success" name="btn">Add </button>
   </form>

   <table class="table">
      <thead>
         <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Count</th>
            <th scope="col">Image</th>
            <th scope="col">Color</th>
            <th scope="col">Loai</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
         <?php
        foreach($result as $value){

       
        ?>
         <tr>
            <th scope="row"><?php echo $value['tendt']?></th>
            <td><?php echo $value['gia']?></td>
            <td><?php echo $value['soluong']?></td>
            <td><img src="<?php echo $value['anh']?>" width="50" height="50" alt=""></td>
            <td><?php echo $value['mau']?></td>
            <td><?php echo $value['tenloai']?></td>
            <td><button class="btn btn-danger" onclick="alert('ban co muon xoa khong')"><a
                     href="?id=<?php echo $value['madt']?>">Delete</a></button><button class="btn btn-warning"><a
                     href="edit.php?id=<?php echo $value['madt']?>">Update</a></button></td>





         </tr>
         <?php
          }
         ?>
      </tbody>
   </table>

</body>

</html>