<div class="loaihang">
<h3 class="alert alert-secondary">QUẢN LÍ HÀNG HÓA</h3>
<form method="post" action="index.php?btn_list">
<table class="table table-hover">
    <tr>
        <td></td>
        <td>MÃ HH</td>
        <td>TÊN HH</td>
        <td>ĐƠN GIÁ</td>
        <td>GIẢM GIÁ</td>
        <td>LƯỢT XEM</td>
        <td></td>
    </tr>

    <?php
    foreach($items as $row){?>
        
    <tr>
        <td><input id="checkbox" type="checkbox" name="cat[]" value="<?=$row['ma_hh']?>"><?=$row['ma_hh']?></td>
        <td><?php echo $row['ma_hh']?></td>
        <td><?php echo $row['ten_hh']?></td>
        <td><?php echo $row['don_gia']?>đ</td>
        <td><?php echo $row['giam_gia']?>%</td>
        <td><?php echo $row['so_luot_xem']?></td>
        <td><button class="btn btn-primary" name="btn_edit">SỬA</button>
        <button class="btn btn-primary" name="btn_delete">XÓA</button></td>
    </tr>
    <?php
    }
    ?>
    
</table>



<input class="btn btn-primary" type="button" id="btn1" value="Chọn tất cả"/>
<input class="btn btn-primary" type="button" id="btn2" value="Bỏ chọn tất cả"/>


<button class="btn btn-primary  " name="btn_insert">Nhập thêm</button>

<button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>
</form>
<br>
<?php
if (isset($_POST['cat'])) {
      foreach($_POST['cat'] as $value) {
         //Xử lý các phần tử được chọn
        
  
       }
      
}
?>


</div>



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


