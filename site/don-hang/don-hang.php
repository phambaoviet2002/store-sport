<?php
error_reporting(0);
require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/hoa-don.php';
require '../../dao/hoa-don-chi-tiet.php';
//-------------------------------//
extract($_REQUEST);

$ma_kh = $_SESSION["user"]['ma_kh'];
$hdht =  hoa_don_hien_tai($ma_kh);
$ma_hd = $hdht['ma_hd'];

$item = don_hang_vua_dat($ma_kh, $ma_hd);
$items = lich_su_mua_hang($ma_kh);


$VIEW_NAME = "don-hang/don-hang-ui.php";
require '../layout.php';
?>

