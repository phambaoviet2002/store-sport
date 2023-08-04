<?php
require "../../global.php";
require "../../dao/khach-hang.php";
require "../../dao/hang-hoa.php";
extract($_REQUEST);

if(exist_param("btn_login")){
$user = khach_hang_select_by_id($ma_kh);
if($user){
if($user['mat_khau'] == $mat_khau){
$MESSAGE = "Đăng nhập thành công!";
$_SESSION["user"] = $user;
if(exist_param("ghi_nho")){
    add_cookie("ma_kh", $ma_kh, 30);
    add_cookie("mat_khau", $mat_khau, 30);
    }
    else{
    delete_cookie("ma_kh");
    delete_cookie("mat_khau");
    }
    
    if(isset($_SESSION['request_uri'])){
        header("location: " . $_SESSION['request_uri']);
        }
        
}
else{
$MESSAGE = "Sai mật khẩu!";
}
}
else{
$MESSAGE = "Sai mã đăng nhập!";
}
}
else{
if(exist_param("btn_logoff")){
session_unset();
}
$ma_kh = get_cookie("ma_kh");
$mat_khau = get_cookie("mat_khau");
}
$VIEW_NAME="tai-khoan/dang-nhap-form.php";
require '../layout.php';
?>
