<?php 
// $x = 4 ;
// function a(){
//     $x = 0 ;
//     print " \$x bien la $x <br> ";
    
// }
// a();
// print "\$x bien la $x";
// Tham Số
// function dientich($w,$h){
//     return $w * $h;
// }
// echo "Area:" . dientich(10,20);
// getArea(5,6)
function listshow($arr){
    echo  "<br>";
    print_r($arr);
    echo  "<br>";
}
    $name = ['Ha','Hoa','hue'];

    $listshow = array(
        "sv1"=>array(
            "mavs"=>"ph30121",
            "name"=>"Ha",
            "Diem"=>9,
        ),
        "sv2"=>array(
            "mavs"=>"ph30121",
            " name"=>"Hoa",
            "Diem"=>9,
        ),
        "sv3"=>array(
            "mavs"=>"ph30121",
            " name"=>"hue",
            "Diem"=>9,
        )
        );

      
function cube($n){
    return ($n * $n * $n);
}
$a = array(1,2,3,4,5);
$b = array_map("cube",$a);
// print_r($b);

// listshow($name);
// listshow($listshow);

// function asignt(){
//     $x=4;
//     echo "{$a}";
// };
// function sayhello($x,$y=" word "){
// echo $x,"", $y;

// }
// sayhello("hello");

//  func_get_arg để nhận một đối số tại một thời điểm. Hàm này nhận một đối số duy nhất, là tham số được trả về, bắt đầu bằng 0
// function arrs(){
//     $x = func_get_arg(0);
//     $y = func_get_arg(1);
//     $z = func_get_arg(2);
//     echo $x . $y . $z;
// }
// arrs('kyanh ','duong ','hue');
// func_num_args: nhận số lượng đối số được truyền vào

// function arrs(){
//    $arrs = func_get_args();
//    echo "<pre>";
//    print_r($arrs);
//    echo "</pre>";
// }
// arrs('kyanh ','duong ','hue');
// function arrs1(){
//     $arrs = func_get_args();
//     echo "<pre>";
//     print_r($arrs);
//     echo "</pre>";  
//  }
//  arrs1('kyanh ','duong ','hue');

 function average(...$args){
    // $args = func_get_args();
    $sum = 0;
    foreach($args as $x){
         $sum += $x;
    }
     $num = func_num_args();
    return $sum/$num;;
 }
 echo average(5,3,7,7,4);
    //  Tầm vực của biến
    // $x="Hello";
    // function sayHello(){
    //     global $x;
    //     $x.=" world";    
    // }
    //  sayHello();
    //  echo $x;
    // Hàm ẩn danh
    //   $say=function($name){
    //     echo "Hello ".$name;
    //   };
    //   $say("Hà");
    //  callBack function
    function myCall($callBack){
        echo $callBack();
    }
    myCall(function(){ echo "Hello";});
       function averangeAuto(...$args){
        // $args=func_get_args();
        $sum=0;
        foreach($args as $xuan){
            $sum+=$xuan;
        }
        $num=func_num_args();
            return $sum/$num;
     }
     echo averangeAuto(5,3,7,7,4);
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
    
</body>
</html>