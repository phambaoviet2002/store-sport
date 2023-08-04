
<div class="banner">
        <img src="<?=$CONTENT_URL?>/img/slide_1_img.webp" alt="" id="anh" />
        <div class="btn"> 
            <button class="btn-1" onclick="prev()"><i class="fa-solid fa-angle-left"></i></button>
            <button class="btn-2" onclick="next()"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
    <script>
        var i=0
        const mang = ['<?=$CONTENT_URL?>/img/slide_1_img.webp','<?=$CONTENT_URL?>/img/slide_2_img.webp','<?=$CONTENT_URL?>/img/slide_3_img.jpg','<?=$CONTENT_URL?>/img/slide_4_img.webp']
        function next() {
            i++
            if(i==4){
                i =1
            }
            document.getElementById('anh').src = mang[i]
            console.log(i)  
        }
        function prev() {
            i--
            if(i==-1){
                i = 3
            }
            document.getElementById('anh').src = mang[i]
            console.log(i)        
        }
        setInterval(next,5000)
    </script>

    <div class="ss2">
        <h2>SẢN PHẨM MỚI</h2>
       
        <div class="row wrap-items">
            <?php
                $items_1 = hang_hoa_moi_nhat();
                foreach($items_1 as $item){ ?>
                    <div class="col-sm-3 cart-items">
                <a href="<?=$SITE_URL?>/hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>"> 
                <img src="<?=$CONTENT_URL?>/img/<?php echo $item['hinh']?>" alt="">
                </a>
                <h4 class="cart-title"><?php echo $item['ten_hh']?></h4>
                <span class="cart-price"><?php echo $item['don_gia']?>₫</span>
            </div>
            <?php
                }
            ?>
 </div>           
        <img class='ss2-bottom' src="<?=$CONTENT_URL?>/img/slide_3_img.jpg" alt="">
    </div>

    
    <div class="ss4">
        <h2>TRANG PHỤC BÓNG ĐÁ</h2>
             <div class="two-img">
                <img src="<?=$CONTENT_URL?>/img/Untitled-1.jpg" alt=""/>
                <img src="<?=$CONTENT_URL?>/img/Untitled-2.jpg" alt=""/>
            </div>
         <div class="ss4-end"></div>
    </div>
   
