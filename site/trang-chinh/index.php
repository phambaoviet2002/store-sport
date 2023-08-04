<?php
require "../../global.php";
require "../../dao/hang-hoa.php";
extract($_REQUEST);
if(exist_param("gioi-thieu")){
$VIEW_NAME = "trang-chinh/gioi-thieu.php";
}
else if(exist_param("lien-he")){
$VIEW_NAME = "trang-chinh/lien-he.php";
}
else if(exist_param("gop-y")){
$VIEW_NAME = "trang-chinh/gop-y.php";
}
else if(exist_param("hoi-dap")){
$VIEW_NAME = "trang-chinh/hoi-dap.php";
}
else{

    $dac_biet_list = hang_hoa_select_dac_biet();

$VIEW_NAME = "trang-chinh/trang-chu.php";
}
require '../layout.php';
?>