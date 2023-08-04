<?php
error_reporting(0);
?>
<?php
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";
}
?>
<form class="alert alert-secondary"  action="doi-mk.php" method="post">
<div>
<label class="form-label">Tên đăng nhập:</label><br>
<input name="ma_kh" class="form-control">
</div> <div>
<label class="form-label">Mật khẩu cũ:</label><br>
<input class="form-control" name="mat_khau" type="password">
</div> <div>
<label class="form-label">Mật khẩu mới:</label><br>
<input class="form-control" name="mat_khau2" type="password">
</div> <div>
<label class="form-label">Xác nhận mật khẩu mới:</label><br>
<input class="form-control" name="mat_khau3" type="password">
</div> <div><br>
<button class="btn btn-secondary" name="btn_change">Đổi mật khẩu</button>
</div>
</form>
<?php
error_reporting(0);
?>
