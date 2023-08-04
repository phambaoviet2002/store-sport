<?php
error_reporting(0);
?>
<h3 class="alert alert-secondary">ĐĂNG KÍ THÀNH VIÊN</h3>
<form class="alert alert-secondary" enctype="multipart/form-data"  method="post" action="dang-ky.php">
<div class="row">
  <div class="col-sm-6"><label class="form-label">Mã khách hàng: </label>
    <br>
    <input class="form-control" type="text" name="makhachhang" /><br></div>
  <div class="col-sm-6"><label class="form-label">Họ và tên: </label>
    <br>
    <input class="form-control" type="text" name="hovaten" /><br></div>
</div>

<div class="row">
  <div class="col-sm-6"><label class="form-label">Mật khẩu: </label>
    <br>
    <input class="form-control" type="password" name="matkhau" /><br></div>
  <div class="col-sm-6"><label class="form-label">Xác nhận mật khẩu: </label>
    <br>
    <input class="form-control" type="password" name="xacnhanmatkhau" /><br></div>
</div>


<div class="row">
  <div class="col-sm-6"><label class="form-label">Địa chỉ email: </label>
    <br>
    <input class="form-control" type="text" name="email" /><br></div>
  <div class="col-sm-6"><label class="form-label">Hình ảnh: </label>
    <br>
    <input class="form-control" type="file" name="hinh" /></div>
</div>

<div class="row">
  <div class="col-sm-6">
    <br>
    <input  type="hidden" name="kichhoat" value="0"/>
   
    
  <div class="col-sm-6">
    <br>
    <input  type="hidden" name="vaitro" value="Khách hàng"/>
    
    
</div>
<br>
<button class="btn btn-secondary" type="submit" name="btn_register">Đăng ký</button>
    
</form>
<div>
<?php
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";
}
?>
</div>