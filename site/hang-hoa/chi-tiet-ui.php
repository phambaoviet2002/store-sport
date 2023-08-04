
<div class="center">

<img src='<?= $CONTENT_URL ?>/img/<?= $hinh ?>' >
<div>
<p>
<ul >
<li>MÃ HH: <?=$ma_hh?></li>
<li>TÊN HH: <?=$ten_hh?></li>
<li>GIÁ CŨ: <del><?=$don_gia?></del>đ</li>
<li>GIÁ MỚI: <?=$don_gia - ($don_gia*$giam_gia/100)?>đ</li>

<li><form method='post'><button type='submit' class='add-cart' name='themgiohang'>THÊM VÀO GIỎ HÀNG</button></form></li>
</ul>
</p>
<div>
    <h4>MÔ TẢ:</h4>
    <?= $mo_ta ?></div>
</div>
</div>
<?php require 'binh-luan.php';?>
<?php require 'hang-cung-loai.php';?>
<?php
    if(isset($_POST['themgiohang'])){
        
        $id = $ma_hh;
        
        $gia_moi = $don_gia - ($don_gia*$giam_gia/100);
        
        $soluong = isset($_POST['soluong']) ? $_POST['soluong'] : '0';
        if(!isset($_SESSION['armuahang'][$id])){
            $_SESSION['armuahang'][$id] = array(
            'id' => $ma_hh,
            'hinh' => $hinh,
            'ten' => $ten_hh,
            'soluong' => $soluong,
            'giamoi' => $gia_moi
            );
            echo $_SESSION['armuahang'][$id];
        }else{
            $_SESSION['armuahang'][$id]['soluong'] += $soluong; 
        }
    }
?>
<script>
    function DecreaseQuantity() {
        var a = document.getElementById('item_quantity').value;
        a = parseInt(a); // Ensure a is a numeric value
        if (a > 1) {
            a -= 1;
        }
        document.getElementById('item_quantity').value = a;
        console.log(a);
    }

    function IncreaseQuantity() {
        var a = document.getElementById('item_quantity').value;
        a = parseInt(a); // Ensure a is a numeric value
        a += 1;
        document.getElementById('item_quantity').value = a;
        console.log(a);
    }
</script>
