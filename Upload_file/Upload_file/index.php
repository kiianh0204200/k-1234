
<?php
  require 'lib/data.php';
if(isset($_FILES['file'])){
    //xử lí upload đúng file ảnh
    $error=array();
    $upload_dir="uploads/";
    // đường dẫn của file sau khi upload
    $upload_file=$upload_dir.basename($_FILES['file']['name']);
    $type_allow=array('png','jpg','jpeg','gif');
    $type=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    echo strtolower($type);

    if(!in_array(strtolower($type),$type_allow)){
        $error['type']="Chỉ được upload file có đuôi png, jpg, jpeg, gif";
    }
    //upload file có kích thước cho phép (<20MB~29000.000 byte)
    $file_size=$_FILES['file']['size'];
    if($file_size>29000000){
        $error['file_size']="Chie được upload file nhỏ hơn 20MB";
    }
    //Kiểm tra trùng tên trên hệ thống
    if(file_exists($upload_file)){
        // Xử lí tự động đổi tên file
        #Tạo file mới
        // tên file.đuôi file
        $file_name=pathinfo($_FILES['file']['name'],PATHINFO_FILENAME);
        $new_file_name=$file_name.'_Copy.';
        $new_upload_file=$upload_dir.$new_file_name.$type;
        $k=1;
        while(file_exists($new_upload_file)){
            $new_file_name=$file_name."_Copy({$k}).";
            $k++;
            $new_upload_file=$upload_dir.$new_file_name.$type;
        }
       $upload_file=$new_upload_file;
    }
    if(empty($error)){
        if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file)){
            echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a>";
        }else{
            echo "Upload file không thành công";
        }
    } else{
        show_array($error);
    }
    show_array($_FILES);
    //Thư mục chứa file upload
    
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file lên server</title>
</head>
<body>
    <h1>Upload file</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        <input type="file" name="file"/> <br>
        <input type="submit" value="Upload File"/>
    </form>
</body>
</html>