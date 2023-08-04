<div class="alert alert-secondary">
<div class="list-group">
<div>TOP 10 SẢN PHẨM ƯA THÍCH</div>

<?php

$hhar = hang_hoa_select_top10();
foreach($hhar as $hh){
   
    $href_1 = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
    echo "<a id='lk' href='$href_1'>" . "<img src='../../content/img/$hh[hinh]' id='favic'/>" 
   .$hh['ten_hh'].  "</a>" ;
   
}
?>

</div>
</div>