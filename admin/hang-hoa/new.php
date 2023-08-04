<div class="container mt-3">
    <h3 class="alert alert-secondary">QUẢN LÍ HÀNG HÓA</h3>
    <form class="alert alert-secondary" enctype="multipart/form-data"  method="post" action="index.php">
    <div class="row">
    <div class="col p-3 ">
    <label class="form-label">Mã hàng hóa: </label>
    <br>
    <input class="form-control" type="text" name="mahanghoa" placeholder="auto number" disabled/><br>
    </div>
    <div class="col p-3 ">
    <label class="form-label">Tên hàng hóa: </label>
    <br>
    <input class="form-control" type="text" name="tenhanghoa" /><br>
    </div>
    <div class="col p-3 ">
    <label class="form-label">Đơn giá: </label>
    <br>
    <input class="form-control" type="text" name="dongia" /><br>
    </div>
    </div>
    <div class="row">
    <div class="col p-3 ">
    <label class="form-label">Giảm giá: </label>
    <br>
    <input class="form-control" type="text" name="giamgia" /><br>
    </div>
    <div class="col p-3 ">
    <label class="form-label">Hình ảnh: </label>
    <br>
    <input class="form-control" type="file" name="hinh" /><br>
    </div>
    <div class="col p-3 ">
    <label class="form-label">Loại hàng: </label>
    <br>
    <select name="maloai">
<?php
foreach ($items as $loai) {
echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'] . "(" . $loai['ma_loai'] . ")" .'</option>';
}
?>
</select>

    </div>
    </div>
    <div class="row">
    <div class="col p-3 ">
    <label class="form-label">Hàng đặc biệt? </label>
    <br>
    <input  type="radio" name="hangdacbiet" value="1"/>
    Đặc biệt<br>
    <input  type="radio" name="hangdacbiet" value="2"/>
    Bình thường<br>
    </div>
    <div class="col p-3 ">
    <label class="form-label">Ngày nhập: </label>
    <br>
    <input class="form-control" type="date" name="ngaynhap" /><br>
    </div>
    <div class="col p-3 ">
    <label class="form-label">Số lượt xem: </label>
    <br>
    <input class="form-control" type="number" value="0" name="soluotxem" disabled/><br>
    </div>
    </div>
    
  
    <div class="mb-3 mt-3">
      <label for="comment">Mô tả:</label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
    </div>
    <button class="btn btn-primary" type="submit" name="btn_insert">Thêm mới</button>
    <button class="btn btn-primary" type="reset">Nhập lại</button>
   
    <button class="btn btn-primary" name="btn_list">Danh sách</button>
    </form>
</div>