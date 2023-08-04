<h3>Đơn Hàng vừa đặt</h3>
<hr>
<table class="table table-hover">
    <tr>
        
        <td>MÃ KH</td>
        <td>HỌ VÀ TÊN</td>
        <td>TÊN HH</td>
        <td>NGÀY MUA</td>
        <td>SỐ LƯỢNG</td>
        <td>GIÁ CẢ</td>
        <td>THÀNH TIỀN</td>
        <td>MÃ HÓA ĐƠN</td>
    </tr>

    <?php
    foreach($item as $row){?>
        
    <tr>
        
        <td><?php echo $row['ma_kh']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['ten_hh']?></td>
        <td><?php echo $row['ngay_mua']?></td>
        <td><?php echo $row['so_luong']?></td>
        <td><?php echo $row['gia_ca']?></td>
        <td><?php echo $row['thanh_tien']?></td>
        <td><?php echo $row['ma_hd']?></td>
    </tr>
    <?php
    }
    ?>
    
</table>
<br><br><br>
<h3>Tất cả đơn hàng bạn đã đặt</h3>
<hr>

<form method="post" action="index.php?btn_list">
<table class="table table-hover">
    <tr>
        
        <td>MÃ KH</td>
        <td>HỌ VÀ TÊN</td>
        <td>TÊN HH</td>
        <td>NGÀY MUA</td>
        <td>SỐ LƯỢNG</td>
        <td>GIÁ CẢ</td>
        <td>THÀNH TIỀN</td>
    </tr>

    <?php
    foreach($items as $row){?>
        
    <tr>
        
        <td><?php echo $row['ma_kh']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['ten_hh']?></td>
        <td><?php echo $row['ngay_mua']?></td>
        <td><?php echo $row['so_luong']?></td>
        <td><?php echo $row['gia_ca']?></td>
        <td><?php echo $row['thanh_tien']?></td>
        
    </tr>
    <?php
    }
    ?>
    
</table>