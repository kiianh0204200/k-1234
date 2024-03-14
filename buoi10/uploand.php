<?php 

 if(isset($_FILES['btn_up'])){
    $dir="anh/";
    $up_file=$dir.$_FILES['upfile']['name'];
    if(move_uploaded_file($_FILES['upfile']['tmp-name']).$up_file);

    
   
 }
 echo "<pre>";
 print_r($_FILES);
 echo "</pre>";
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";
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
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="upfile">
        <input type="submit" name="btn_up" value="up-load">
    </form>
</body>
</html> 