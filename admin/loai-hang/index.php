<?php
error_reporting(0);
?>
<?php
require "../../global.php";
require "../../dao/loai.php";



extract($_REQUEST);

if(exist_param("btn_insert")){
    
    try {
        $ten_loai = $_POST['tenloai'];
        loai_insert($ten_loai);
        
        $MESSAGE = "Thêm mới thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
        }
        $VIEW_NAME = "loai-hang/new.php";
}
else if(exist_param("btn_update")){
    try {
        $ten_loai = $_POST['tenloai'];
        $ma_loai = $_POST['maloai'];
        loai_update($ma_loai, $ten_loai);
        $MESSAGE = "Cập nhật thành công!";
        } 
        catch (Exception $exc) {
            $MESSAGE = "cập nhật thất bại";
        }
        
$VIEW_NAME = "loai-hang/update.php";
}
else if(exist_param("btn_delete")){
    try {
        $ma_loai = $_POST['cat'];
        loai_delete($ma_loai);
        $items = loai_select_all();
        $MESSAGE = "Xóa thành công!";
        } 
        catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        }
$VIEW_NAME = "loai-hang/list.php";
}
else if(exist_param("btn_deletenhieu")){
    try {
        if (isset($_POST['cat'])) {
            foreach($_POST['cat'] as $ma) {
               //Xử lý các phần tử được chọn
              
              
              loai_delete($ma);
              $items = loai_select_all();
              $MESSAGE = "Xóa thành công!";
             }
            
      }
      
        } 
        catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
$VIEW_NAME = "loai-hang/list.php";
}
else if(exist_param("btn_edit")){
    foreach($_POST['cat'] as $ma_loai){
    $item = loai_select_by_id($ma_loai);
    extract($item);
    

}
$VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = loai_select_all();
$VIEW_NAME = "loai-hang/list.php";
}
else{
$VIEW_NAME = "loai-hang/new.php";
}
require "../layout.php";

?>
