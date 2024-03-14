<?php
 $post = array(
    "post1"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-1473150685951-5.jpg",
        "title"=>"Chó Husky  ",
        "description"=>"Chó Ăn Thịt"
    ),
    "post2"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-1473150685951-5.jpg",
        "title"=>"Chó Husky  ",
        "description"=>"Chó Ăn Thịt"
    )
    ,
    "post3"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-1473150685951-5.jpg",
        "title"=>"Chó Husky  ",
        "description"=>"Chó Ăn Thịt"
    ),
    "post4"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/cho-akita-con-nam-tren-co.jpg",
        "title"=>"chó Akita  ",
        "description"=>"Chó Ăn Thịt"
    ),
    "post5"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/cho-akita-con-nam-tren-co.jpg",
        "title"=>"chó Akita  ",
        "description"=>"Chó Ăn Thịt"
    )
    ,
    "post6"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/cho-akita-con-nam-tren-co.jpg",
        "title"=>"chó Akita  ",
        "description"=>"Chó Ăn Thịt"
    )
    ,
    "post7"=>array(
        "image"=>"1-1473150685951-5.jpg",
        "title"=>"Chó Poodle  ",
        "description"=>"Chó Ăn Thịt"
    ),
    "post8"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/poodle-2141699_1280.jpg",
        "title"=>"Chó Poodle  ",
        "description"=>"Chó Ăn Thịt"
    )
    ,
    "post9"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/poodle-2141699_1280.jpg",
        "title"=>"Chó Poodle  ",
        "description"=>"Chó Ăn Thịt"
    )
    );
 $product = array(
    "product1"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-9.jpg",
        "tensp"=>"Chó Cơ Bắp ",
        "price"=>"Chó Ăn Thịt"
    ),
    "product2"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-9.jpg",
        "tensp"=>"Chó Cơ Bắp ",
        "price"=>"Chó Ăn Thịt"
    )
    ,
    "product3"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-9.jpg",
        "tensp"=>"Chó Cơ Bắp ",
        "price"=>"Chó Ăn Thịt"
    ),
    "product4"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/hinh-nen-cun-con-de-thuong-29-4.jpg",
        "tensp"=>"chó Đỏ  ",
        "price"=>"Chó Ăn Thịt"
    ),
    "product5"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/hinh-nen-cun-con-de-thuong-29-4.jpg",
        "tensp"=>"chó Đỏ  ",
        "price"=>"Chó Ăn Thịt"
    )
    ,
    "product6"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/hinh-nen-cun-con-de-thuong-29-4.jpg",
"tensp"=>"chó Đỏ  ",
        "price"=>"Chó Ăn Thịt"
    )
    ,
    "product7"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-8.jpg",
        "tensp"=>"chó Đỏ  ",
        "price"=>"Chó Ăn Thịt"
    ),
    "product8"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-8.jpg",
        "tensp"=>"chó Đỏ  ",
        "price"=>"Chó Ăn Thịt"
    )
    ,
    "product9"=>array(
        "image"=>"https://sieupet.com/sites/default/files/pictures/images/1-8.jpg",
        "tensp"=>"chó Đỏ  ",
        "price"=>"Chó Ăn Thịt"
    )
 )
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai1</title>

    <style>
        h2{
            text-align: center;
        }
    .container {
        width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 400px 400px 400px;
        gap: 10px;

    }

    .container-item {

        display: flex;
        border: 1px solid gray;
        padding: 10px;
    }

    .container-item-product {
        text-align: center;
        border: 1px solid gray;
        
    }
    .container-item-des{
        margin: 20px;
    }
    .container-item img{
        border-radius: 50%;
    }
    .container-item-product img{
        border-radius: 10%;
    }
    </style>
</head>

<body>
    <h2>LIST POST</h2>
    <div class="container ">
        <?php
        foreach($post as $post){

        
        ?>
        
        <div class="container-item ">
            <img src=<?php echo $post["image"] ?> width="150px" height="full" alt="">
            <div class="container-item-des">
                <h2><?php echo $post["title"] ?></h2>
                <p><?php echo $post["description"] ?></p>
                
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <h2>LIST PRODUCT</h2>
    <div class="container ">
        <?php
        foreach($product as $product){

        
        ?>
        <div class="container-item-product ">
            <h2><?php echo $product["tensp"] ?></h2>
            <img src=<?php echo $product["image"] ?> width="full" height="150px" alt="">

            <p><?php echo $product["price"] ?></p>

        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>