<?php
require_once 'pdo.php';

function hoa_don_chi_tiet_insert($ma_hd,$ma_hh,$so_luong,$gia_ca,$thanh_tien){
    $sql = "INSERT INTO hoadon_chitiet(ma_hd, ma_hh, so_luong, gia_ca, thanh_tien) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $ma_hd,$ma_hh,$so_luong,$gia_ca,$thanh_tien);
   
}
function hoa_don_chi_tiet_select_all(){
    $sql = "SELECT * FROM hoadon_chitiet";
    return pdo_query($sql);
}
function don_hang_vua_dat($ma_kh, $ma_hd){
    $sql = "SELECT hoa_don.ma_kh , khach_hang.ho_ten , hang_hoa.ten_hh, hoa_don.ngay_mua, hoadon_chitiet.so_luong, hoadon_chitiet.gia_ca, hoadon_chitiet.thanh_tien, hoadon_chitiet.ma_hd
    FROM hoadon_chitiet LEFT JOIN hoa_don ON hoa_don.ma_hd = hoadon_chitiet.ma_hd 
    LEFT JOIN hang_hoa ON hang_hoa.ma_hh = hoadon_chitiet.ma_hh 
    JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh WHERE khach_hang.ma_kh = ? AND hoadon_chitiet.ma_hd = ?";
    return pdo_query($sql, $ma_kh, $ma_hd);
}
function lich_su_mua_hang($ma_kh){
    $sql = "SELECT hoa_don.ma_kh , khach_hang.ho_ten , hang_hoa.ten_hh, hoa_don.ngay_mua, hoadon_chitiet.so_luong, hoadon_chitiet.gia_ca, hoadon_chitiet.thanh_tien 
    FROM hoadon_chitiet LEFT JOIN hoa_don ON hoa_don.ma_hd = hoadon_chitiet.ma_hd 
    LEFT JOIN hang_hoa ON hang_hoa.ma_hh = hoadon_chitiet.ma_hh 
    JOIN khach_hang ON khach_hang.ma_kh = hoa_don.ma_kh WHERE khach_hang.ma_kh = ? ";
    return pdo_query($sql, $ma_kh);
}
?>