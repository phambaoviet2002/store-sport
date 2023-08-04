<?php
require_once 'pdo.php';
function binh_luan_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl){
    $sql= "INSERT INTO binh_luan(noi_dung, ma_hh, ma_kh, ngay_bl) VALUES (?,?,?,?)";
    return pdo_execute($sql, $noi_dung, $ma_hh, $ma_kh, $ngay_bl);
}



function thong_ke_binh_luan(){
    $sql = "SELECT hang_hoa.ma_hh, ten_hh, MIN(DATE(ngay_bl)) as cu_nhat, MAX(DATE(ngay_bl)) as moi_nhat, COUNT(*) as so_binh_luan 
    FROM hang_hoa INNER JOIN binh_luan ON binh_luan.ma_hh = hang_hoa.ma_hh GROUP BY ma_hh";
    return pdo_query($sql);
}
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT * FROM binh_luan WHERE ma_hh = ?";
    return pdo_query($sql, $ma_hh);
}
function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if(is_array($ma_bl)){
    foreach ($ma_bl as $ma) {
    pdo_execute($sql, $ma);
    }
    }
    else{
    pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan";
    return pdo_query($sql);
}
?>