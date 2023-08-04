<?php

session_start();

$ROOT_URL = "/PHPDA1";
$ADMIN_URL = "$ROOT_URL/admin";
$CONTENT_URL = "$ROOT_URL/content";
$DAO_URL = "$ROOT_URL/dao";
$SITE_URL = "$ROOT_URL/site";

function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}

//* Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/img";

//* Lưu file upload vào thư mục
// @param string $fieldname là tên trường file
//@param string $target_dir thư mục lưu file
//@return tên file upload
function save_file($fieldname, $target_dir){
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
    }
    

function add_cookie($name, $value, $day){
    setcookie($name, $value, time() + (86400 * $day), "/");
    }


// Xóa cookie
//@param string $name là tên cookie

function delete_cookie($name){
    $value = "";
    add_cookie($name, $value,-1);
}
    /**
    * Đọc giá trị cookie
    * @param string $name là tên cookie
    * @return string giá trị của cookie
    */
    
function get_cookie($name){
    return $_COOKIE[$name]??'';
}

function check_login(){
    global $SITE_URL;
    if(isset($_SESSION['user'])){
    if($_SESSION['user']['vai_tro'] == 1){
    return;
    }
    if(strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE){
    return;
    }
    }
    $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
    header("location: $SITE_URL/tai-khoan/dang-nhap.php");
}    
    
?>