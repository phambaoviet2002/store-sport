
<?php
require "../../global.php";

require "../../dao/binh-luan.php";
//--------------------------------//
extract($_REQUEST);
if(exist_param("btn_detail")){
  $items = binh_luan_select_by_hang_hoa($ma_hh);
  
$VIEW_NAME = "binh-luan/detail.php";
}


else if(exist_param("btn_delete")){
    $items = binh_luan_select_by_hang_hoa($ma_hh);
    try {
        $ma_bl = $_POST['cat'];
        binh_luan_delete($ma_bl);
        $items = binh_luan_select_by_hang_hoa($ma_hh);
        $MESSAGE = "Xóa thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        }
        $VIEW_NAME = "binh-luan/detail.php";

}
else if(exist_param("btn_deletenhieu")){
    $items = binh_luan_select_by_hang_hoa($ma_hh);
    try {
        if (isset($_POST['cat'])) {
            foreach($_POST['cat'] as $ma) {
               //Xử lý các phần tử được chọn
              
              
              binh_luan_delete($ma);
              $items = binh_luan_select_by_hang_hoa($ma_hh);
              $MESSAGE = "Xóa thành công!";
             }
            
      }
      
        } 
        catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }

        $VIEW_NAME = "binh-luan/detail.php";
}


else{
$items = thong_ke_binh_luan();
$VIEW_NAME = "binh-luan/list.php";
}
require "../layout.php";
?>