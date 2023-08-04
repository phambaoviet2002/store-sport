<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/hang-hoa.php';
extract($_REQUEST);
if(exist_param("btn_change")){
if($mat_khau2 != $mat_khau3){
$MESSAGE = "Xác nhận mật khẩu mới không đúng!";
}
else{
$user = khach_hang_select_by_id($ma_kh);
if($user){
if($user['mat_khau'] == $mat_khau){
try {
    khach_hang_change_password($mat_khau2,$ma_kh);
$MESSAGE = "Đổi mật khẩu thành công!";
} 
catch (Exception $exc) {
$MESSAGE = "Đổi mật khẩu thất bại !";
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
}$VIEW_NAME="tai-khoan/doi-mk-form.php";
require '../layout.php';
?>
