<?php
error_reporting(0);
?>
<?php
require "../../global.php";
require "../../dao/hang-hoa.php";



extract($_REQUEST);

if(exist_param("btn_insert")){
    try {

        
        $items = loai_select_all();
        
        $ten_hh = $_POST['tenhanghoa'];
        $don_gia = $_POST['dongia'];
        $giam_gia = $_POST['giamgia'];
        $hinh = $_FILES['hinh']['name'];
        $ngay_nhap = $_POST['ngaynhap'];
        $mo_ta = $_POST['text'];
        $dac_biet = $_POST['hangdacbiet'];
        $so_luot_xem = 0;
        $ma_loai = $_POST['maloai'];
        
        hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
        unset($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
        $MESSAGE = "Thêm mới thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
        }
    
$VIEW_NAME = "hang-hoa/new.php";
}
else if(exist_param("btn_update")){
    try {

        

        $items = loai_select_all();
        
        $ten_hh = $_POST['tenhanghoa'];
        $don_gia = $_POST['dongia'];
        $giam_gia = $_POST['giamgia'];
        $hinh = $_FILES['hinh']['name'];
        $ngay_nhap = $_POST['ngaynhap'];
        $mo_ta = $_POST['text'];
        $dac_biet = $_POST['hangdacbiet'];
        $so_luot_xem = 0;
        $ma_loai = $_POST['maloai'];
        $ma_hh = $_POST['mahanghoa'];
        

        hang_hoa_update($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai,$ma_hh);
        $MESSAGE = "Cập nhật thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
        }
        
    $VIEW_NAME = "hang-hoa/update.php";
}
else if(exist_param("btn_delete")){
    try {
        $ma_hh = $_POST['cat'];
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_all();
        $MESSAGE = "Xóa thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        }
$VIEW_NAME = "hang-hoa/list.php";
}
else if(exist_param("btn_deletenhieu")){
    try {
        if (isset($_POST['cat'])) {
            foreach($_POST['cat'] as $ma) {
               //Xử lý các phần tử được chọn
              
              
               hang_hoa_delete($ma);
              $items = hang_hoa_select_all();
              $MESSAGE = "Xóa thành công!";
             }
            
      }
      
        } 
        catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
$VIEW_NAME = "hang-hoa/list.php";
}
else if(exist_param("btn_edit")){
    foreach($_POST['cat'] as $ma_hh){
        $item = hang_hoa_select_by_id($ma_hh);
        extract($item);
        
    }  
    
$VIEW_NAME = "hang-hoa/edit.php";
}
else if(exist_param("btn_list")){
    $items = hang_hoa_select_all();
    

$VIEW_NAME = "hang-hoa/list.php";
}
else{
    $items = loai_select_all();
$VIEW_NAME = "hang-hoa/new.php";
}
require "../layout.php";

?>