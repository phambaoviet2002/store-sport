<div class="alert alert-secondary">
<?php
require '../../dao/binh-luan.php';
if(exist_param("noi_dung")){
$ma_kh = $_SESSION["user"]['ma_kh'];
$ngay_bl = date_format(date_create(), 'Y-m-d');
binh_luan_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl);
}
$binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh); 
foreach ($binh_luan_list as $bl) {
echo "<li>" . $bl['noi_dung'] . "<i><b>" . $bl['ma_kh'] . "</b>," . $bl['ngay_bl'] . "</i></li>";
}
if(!isset($_SESSION['user'])){
echo '<b>Đăng nhập để bình luận về sản phẩm này</b>';
} else{
?>
</div>
<form class="alert alert-secondary" action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
<input class="form-control" name="noi_dung"/><button class="btn btn-secondary">Gửi</button>
</form> 
<br>
<?php }?>
<br>
