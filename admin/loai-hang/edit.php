<div class="loaihang">
<h3 class="alert alert-secondary">QUẢN LÍ LOẠI HÀNG</h3>

<form class="alert alert-secondary" method="post" action="index.php">
    Mã loại:<br>
    <input class="form-control" type="text" value="<?=$item['ma_loai']?>" name="maloai"   placeholder="auto number"/><br>
    Tên loại:<br>
    <input class="form-control" type="text" value="<?=$item['ten_loai']?>"  name="tenloai"/><br>
    <button class="btn btn-primary" type="submit" name="btn_update">Cập nhật</button>
    <button class="btn btn-primary" type="reset">Nhập lại</button>
    <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
    <button class="btn btn-primary" name="btn_list">Danh sách</button>
</form>



</div>