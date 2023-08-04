<?php
require_once 'pdo.php';

function hoa_don_insert($ngay_mua,$ma_kh){
    $sql = "INSERT INTO hoa_don(ngay_mua,ma_kh) VALUES (?,?)";
    pdo_execute($sql, $ngay_mua , $ma_kh);
}
function hoa_don_hien_tai($ma_kh){
    $sql = "SELECT * FROM hoa_don WHERE ma_kh = ? ORDER BY ma_hd DESC LIMIT 0,1;";
    return pdo_query_one($sql, $ma_kh);
}
?>