<form class='form-users' id='dang_nhap_form' action="<?=$SITE_URL?>/tai-khoan/dang-nhap.php" method="post">
<div>
<div>Tên đăng nhập</div>
<input name="ma_kh" value="<?=$ma_kh?>">
</div>
<div>
<div>Mật khẩu</div>
<input name="mat_khau" type="password" value="<?=$mat_khau?>">
</div>
<div>
<input name="ghi_nho" type="checkbox" checked> Ghi nhớ tài khoản?
</div>
<div class="form-group">
<button class="btn btn-secondary" name="btn_login">Đăng nhập</button>
</div>
<div>
<li><a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
<li><a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
</div>
<?php
error_reporting(0);
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";
}
?>

</form> 
