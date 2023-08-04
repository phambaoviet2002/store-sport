<h3 class="alert alert-secondary">QUẢN LÍ KHÁCH HÀNG</h3>
<form class="alert alert-secondary" enctype="multipart/form-data"  method="post" action="index.php">
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
    <input class="form-control" type="text" name="matkhau" /><br></div>
  <div class="col-sm-6"><label class="form-label">Xác nhận mật khẩu: </label>
    <br>
    <input class="form-control" type="text" name="xacnhanmatkhau" /><br></div>
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
  <div class="col-sm-6"><label class="form-label">Kích hoạt? </label>
    <br>
    <input  type="radio" name="kichhoat" value="0"/>
    Chưa kích hoạt<br>
    <input  type="radio" name="kichhoat" value="1"/>
    Kích hoạt<br></div>
  <div class="col-sm-6"><label class="form-label">Vai trò? </label>
    <br>
    <input  type="radio" name="vaitro" value="Khách hàng"/>
    Khách hàng<br>
    <input  type="radio" name="vaitro" value="Nhân viên"/>
    Nhân viên<br></div>
</div>
<br>
<button class="btn btn-primary" type="submit" name="btn_insert">Thêm mới</button>
    <button class="btn btn-primary" type="reset">Nhập lại</button>
   
    <button class="btn btn-primary" name="btn_list">Danh sách</button>
</form>