<div class='form-infors' id='dang_nhap_infors' >TÀI KHOẢN
<div>
<div>
<img id="anhdaidien" src='<?=$CONTENT_URL?>/img/<?=$_SESSION['user']['hinh']?>'>
<br>
<?= $_SESSION['user']['ho_ten']?><br>
<?= $_SESSION["user"]['ma_kh']?><br>
<?= $_SESSION["user"]['vai_tro']?>
</div>

<li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
<li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
<li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
<?php
if($_SESSION['user']['vai_tro'] == "Nhân viên"){
echo "<li><a target='_blank' href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
}
?>
</div>
</div>