<h3 class="alert alert-secondary">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
<table class="table table-hover">
    <tr class="alert alert-secondary">
        
        <td>TÊN LOẠI</td>
        <td>SỐ LƯỢNG</td>
        <td>GIÁ CAO NHẤT</td>
        <td>GIÁ THẤP NHẤT</td>
        <td>GIÁ TRUNG BÌNH</td>
    </tr>

    <?php
    foreach($items as $row){?>
        
    <tr>
        
        <td><?php echo $row['ten_loai']?></td>
        <td><?php echo $row['so_luong']?></td>
        <td><?php echo $row['max']?></td>
        <td><?php echo $row['min']?></td>
        <td><?php echo $row['gia_trung_binh']?></td>
    </tr>
    <?php
    }
    ?>
    
</table>
<form method="post" action="index.php?btn_chart">
<button class="btn btn-primary" name="btn_chart">XEM BIỂU ĐỒ</button>
</form>
<br>