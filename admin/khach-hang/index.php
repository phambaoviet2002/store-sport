<?php
error_reporting(0);
?>
<?php
require "../../global.php";
require "../../dao/khach-hang.php";



extract($_REQUEST);

if(exist_param("btn_insert")){
    
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
        
        $MESSAGE = "Thêm mới thành công!";
        }else{
        $MESSAGE = "Thêm mới thất bại! MK!=XNMK";
        }
        } 
        catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
        $VIEW_NAME = "khach-hang/new.php";
}
else if(exist_param("btn_update")){
    try{
    $xacnhanmk = $_POST['xacnhanmatkhau'];
        
        
    $ma_kh = $_POST['makhachhang'];
    $mat_khau = $_POST['matkhau'];
    $ho_ten = $_POST['hovaten'];
    $kich_hoat = $_POST['kichhoat'];
    $hinh = $_FILES['hinh']['name']; 
    $email = $_POST['email'];
    $vai_tro = $_POST['vaitro'];
    $ma_khach = $_POST['makhachhang'];
if($mat_khau === $xacnhanmk){
    

    khach_hang_update($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro, $ma_khach);

    $MESSAGE = "Cập nhật thành công!";
}else{
    $MESSAGE = "Cập nhật thất bại! MK!=XKMK";
}
} 
catch (Exception $exc) {
    $MESSAGE = "Cập nhật thất bại!";
}
        
$VIEW_NAME = "khach-hang/update.php";
}
else if(exist_param("btn_delete")){
    try {
        $ma_kh = $_POST['cat'];
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        }
$VIEW_NAME = "khach-hang/list.php";
}
else if(exist_param("btn_deletenhieu")){
    try {
        if (isset($_POST['cat'])) {
            foreach($_POST['cat'] as $ma) {
               //Xử lý các phần tử được chọn
              
              
              khach_hang_delete($ma);
              $items = khach_hang_select_all();
              $MESSAGE = "Xóa thành công!";
             }
            
      }
      
        } 
        catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        }
$VIEW_NAME = "khach-hang/list.php";
}
else if(exist_param("btn_edit")){
    foreach($_POST['cat'] as $ma_kh){
    $item = khach_hang_select_by_id($ma_kh);
    extract($item);
    

}
$VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = khach_hang_select_all();
$VIEW_NAME = "khach-hang/list.php";
}
else{
$VIEW_NAME = "khach-hang/new.php";
}
require "../layout.php";

?>
