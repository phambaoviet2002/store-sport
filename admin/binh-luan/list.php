<div >
<h3 class="alert alert-secondary">QUẢN LÍ BÌNH LUẬN</h3>

<table class="table table-hover">
    <tr>
        <td>MÃ HÀNG HÓA</td>
        <td>HÀNG HÓA</td>
        <td>SỐ BÌNH LUẬN</td>
        <td>MỚI NHẤT</td>
        <td>CŨ NHẤT</td>
        
    </tr>

    <?php
    foreach($items as $row){?>
    <form method="post" action="index.php?ma_hh=<?=$row['ma_hh'];?>">
        
    <tr>
    <td><input id="checkbox" type="checkbox"  value="<?=$row['ma_hh']?>"><?=$row['ma_hh']?></td>
        
        <td><?php echo $row['ten_hh']?></td>
        <td><?php echo $row['so_binh_luan']?></td>
        <td><?php echo $row['moi_nhat']?></td>
        <td><?php echo $row['cu_nhat']?></td>
        <td><button class="btn btn-primary" name="btn_detail">CHI TIẾT</button></td>
    </tr>
    </form>
    <?php
    }
    ?>
    
</table>


