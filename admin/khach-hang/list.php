<h3 class="alert alert-success">QUẢN LÍ KHÁCH HÀNG</h3>
<form method="post" action="index.php?btn_list">
<table class="table table-hover">
    <tr>
        <td></td>
        <td>MÃ KH</td>
        <td>HỌ VÀ TÊN</td>
        <td>ĐỊA CHỈ EMAIL</td>
        <td>HÌNH ẢNH</td>
        <td>VAI TRÒ</td>
        <td></td>
    </tr>

    <?php
    foreach($items as $row){?>
        
    <tr>
        <td><input id="checkbox" type="checkbox" name="cat[]" value="<?=$row['ma_kh']?>"><?=$row['ma_kh']?></td>
        <td><?php echo $row['ma_kh']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['hinh']?></td>
        <td><?php echo $row['vai_tro']?></td>
        <td><button class="btn btn-primary" name="btn_edit">SỬA</button>
        <button class="btn btn-primary" name="btn_delete">XÓA</button></td>
    </tr>
    <?php
    }
    ?>
    
</table>
<input class="btn btn-primary" type="button" id="btn1" value="Chọn tất cả"/>
<input class="btn btn-primary" type="button" id="btn2" value="Bỏ chọn tất cả"/>


<button class="btn btn-primary" name="btn_insert">Nhập thêm</button>

<button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>
</form>
<br>

<script>
    document.getElementById("btn1").onclick = function () 
{
    // Lấy danh sách checkbox
    var checkboxes = document.getElementsByName('cat[]');

    // Lặp và thiết lập checked
    for (var i = 0; i < checkboxes.length; i++){
        checkboxes[i].checked = true;
    }
};

// Chức năng bỏ chọn hết
document.getElementById("btn2").onclick = function () 
{
    // Lấy danh sách checkbox
    var checkboxes = document.getElementsByName('cat[]');

    // Lặp và thiết lập Uncheck
    for (var i = 0; i < checkboxes.length; i++){
        checkboxes[i].checked = false;
    }
};
</script>