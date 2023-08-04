<?php
require_once 'pdo.php';


function loai_select_all(){
    $sql = "SELECT * FROM loai";
    return pdo_query($sql);
}

function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai){
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ngay_nhap, mo_ta, dac_biet, so_luot_xem, ma_loai) 
    VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
}
function hang_hoa_update($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai,$ma_hh){
    $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ngay_nhap=?,mo_ta=?,dac_biet=?,so_luot_xem=?,ma_loai=? 
    WHERE ma_hh=?";
    pdo_execute($sql,$ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai,$ma_hh);
}
function hang_hoa_delete($ma_hh){
    $sql = "DELETE FROM hang_hoa WHERE ma_hh = ? ";
    if(is_array($ma_hh)){
    foreach ($ma_hh as $ma) {
    pdo_execute($sql, $ma);
    }
    }
    else{
    pdo_execute($sql, $ma_hh);
    }
}
function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa";
    return pdo_query($sql);
}
function hang_hoa_select_by_id($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh = ?";
    return pdo_query_one($sql, $ma_hh);
}


function hang_hoa_tang_so_luot_xem($ma_hh) {
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh = ?";
    return pdo_query($sql, $ma_hh);
}
function hang_hoa_select_top10() {
    $sql = "SELECT * FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 0,10";
    return pdo_query($sql);
}
function hang_hoa_select_dac_biet() {
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet = 1 ";
    return pdo_query($sql);
}
function hang_hoa_select_by_loai($ma_loai) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ?";
    return pdo_query($sql, $ma_loai);
}
function hang_hoa_select_keyword($keyword) {
    $sql = "SELECT * FROM hang_hoa INNER JOIN loai ON loai.ma_loai = hang_hoa.ma_loai WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%' , '%'.$keyword.'%');
}
function hang_hoa_select_page($start, $limit) {
    $sql = "SELECT * FROM hang_hoa LIMIT ?, ?";
    return pdo_query($sql, $start, $limit);
}
function hang_hoa_moi_nhat(){
    $sql = "SELECT * FROM hang_hoa ORDER BY ngay_nhap DESC LIMIT 0 , 8";
    return pdo_query($sql);
}
function hang_hoa_select_by_set() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = 38";
    return pdo_query($sql);
}
function hang_hoa_select_by_bong_da() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = 31";
    return pdo_query($sql);
}
function hang_hoa_select_by_bong_chuyen() {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = 32";
    return pdo_query($sql);
}
?>