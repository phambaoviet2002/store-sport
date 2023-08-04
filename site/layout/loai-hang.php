
<div class="list-group" id='danh_muc'  style='width: 300px'>

<?php

$items = loai_select_all();
foreach($items as $loai){
    $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
    echo "<a class='list-group-item list-group-item-action' href='$href'>" .$loai['ten_loai'].  "</a>" ;
}
?>
</div>