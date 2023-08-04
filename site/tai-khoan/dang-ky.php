<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/hang-hoa.php';
extract($_REQUEST);
if(exist_param("btn_register")){

try {
        
        $xacnhanmk = $_POST['xacnhanmatkhau'];
        
        
            $ma_kh = $_POST['makhachhang'];
            $mat_khau = $_POST['matkhau'];
            $ho_ten = $_POST['hovaten'];
            $kich_hoat = $_POST['kichhoat'];
            $hinh = $_FILES['hinh']['name']; 
            $email = $_POST['email'];
            $vai_tro = $_POST['vaitro'];

        if($mat_khau === $xacnhanmk){
            
        
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
        
        $MESSAGE = "Đăng kí thành công!";
        }else{
        $MESSAGE = "Đăng kí thất bại! MK!=XNMK";
        }
        } 
        catch (Exception $exc) {
            $MESSAGE = "Đăng kí thất bại!";
        }
}

else{
global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}
$VIEW_NAME="tai-khoan/dang-ky-form.php";
require '../layout.php';
?>