<?php
require "pdo.php";
function thong_ke(){
    $sql = "SELECT loai.ten_loai, COUNT(*) as so_luong, MAX(hang_hoa.don_gia) as max, MIN(hang_hoa.don_gia) as min  ,
    (MAX(hang_hoa.don_gia)+MIN(hang_hoa.don_gia))/2 as gia_trung_binh
    
    FROM `loai` INNER JOIN hang_hoa
    ON hang_hoa.ma_loai=loai.ma_loai
    GROUP BY loai.ten_loai
    ORDER BY COUNT(*) DESC";
    return pdo_query($sql);
}
?>
