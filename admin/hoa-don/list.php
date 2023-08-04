<h3 class="alert alert-secondary">QUẢN LÍ HÓA ĐƠN</h3>
<form method="post" action="index.php?btn_list">
<table class="table table-hover">
    <tr>
        <td>MÃ HĐCT</td>
        <td>MÃ HD</td>
        <td>MÃ HH</td>
        <td>SỐ LƯỢNG</td>
        <td>GIÁ CẢ</td>
        <td>THÀNH TIỀN</td>
        
    </tr>

    <?php
    foreach($items as $row){?>
        
    <tr>
        
        <td><?php echo $row['ma_hdct']?></td>
        <td><?php echo $row['ma_hd']?></td>
        <td><?php echo $row['ma_hh']?></td>
        <td><?php echo $row['so_luong']?></td>
        <td><?php echo $row['gia_ca']?></td>
        <td><?php echo $row['thanh_tien']?></td>
        
    </tr>
    <?php
    }
    ?>
    
</table>