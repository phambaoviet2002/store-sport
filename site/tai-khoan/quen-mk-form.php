<?php
error_reporting(0);
?>
<?php
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";
}
?>
<form class="alert alert-secondary" action="quen-mk.php" method="post">
<div>
<label class="form-label">Tên đăng nhập</label><br>
<input class="form-control" name="ma_kh"><br><br>
</div>
<div>
<label class="form-label">Địa chỉ email</label><br>
<input class="form-control" name="email"><br><br>
</div>
<div>
<button class="btn btn-secondary" name="btn_forgot">Tìm lại mật khẩu</button>
</div>
</form>
