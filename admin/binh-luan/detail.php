<div >
<h3 class="alert alert-secondary">QUẢN LÍ BÌNH LUẬN</h3>

<table class="table table-hover">
    <tr>
        <td>MÃ HÀNG HÓA</td>
        <td>MÃ BÌNH LUẬN</td>
        <td>NỘI DUNG</td>
        <td>NGÀY BÌNH LUẬN</td>
        <td>NGƯỜI BÌNH LUẬN</td>
        <td></td>
    </tr>

    <?php
    foreach($items as $row){?>
        <form method="post" action="index.php?ma_hh=<?=$row['ma_hh'];?>?btn_detail">
    <tr>
        <td><?php echo $row['ma_hh']?></td>
        <td><input id="checkbox" type="checkbox" name="cat[]" value="<?=$row['ma_bl']?>"><?=$row['ma_bl']?></td>
        <td><?php echo $row['noi_dung']?></td>
        <td><?php echo $row['ma_kh']?></td>
        <td><button class="btn btn-primary" name="btn_delete">XÓA</button></td>
    </tr>
    <?php
    }
    ?>
    
</table>
<input class="btn btn-primary" type="button" id="btn1" value="Chọn tất cả"/>
<input class="btn btn-primary" type="button" id="btn2" value="Bỏ chọn tất cả"/>



<input class="btn btn-primary" type="submit" name="add_post" value="Mục đã chọn là">
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