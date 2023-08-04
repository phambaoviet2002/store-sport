<div class="ss2">
    <div class="row wrap-items">
        <?php
                foreach($items as $item){ ?>
                    <div class="col-sm-3 cart-items">
                        <a href="chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                        <img class='anh-danhmuc' src="<?=$CONTENT_URL?>/img/<?php echo $item['hinh']?>" alt="">
                </a>
                <h4 class="cart-title"><?php echo $item['ten_hh']?></h4>
                <span class="cart-price"><?php echo $item['don_gia']?>₫</span>
            </div>
            <?php
                }
        ?>
</div>           
</div>