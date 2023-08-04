<?php
error_reporting(0);
?>
<form class="alert alert-secondary" action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
<img id="anhdaidien" src="<?=$CONTENT_URL?>/img/users/<?=$hinh?>"><br>
<label class="form-label">Tên đăng nhập: </label><br>
<input class="form-control" name="ma_kh" value="<?=$ma_kh?>" readonly><br>
<label class="form-label">Họ và tên: </label><br>
<input class="form-control" name="ho_ten" value="<?=$ho_ten?>"><br>
<label class="form-label">EMAIL: </label><br>
<input class="form-control" name="email" value="<?=$email?>"><br>
<label class="form-label">Cập nhật hình: </label><br>
<input class="form-control" name="up_hinh" type="file"><br><br>
<button class="btn btn-secondary" name="btn_update">Cập nhật</button><br>
<input name="vai_tro" value="<?=$vai_tro?>" type="hidden"><br>
<input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
<input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
<input name="hinh" value="<?=$hinh?>" type="hidden">
</form>
<?php
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";
}
?>