<?php
//xóa file ảnh
$file_url='uploads/flowe3.PNG';
if (unlink($file_url)){
    echo "Xóa file {$file_url} thành công";
}else{
    echo "File {file_url} không tồn tại trên hệ thống";
}

?>