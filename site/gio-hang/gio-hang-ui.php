
<h3>GIỎ HÀNG CỦA BẠN</h3>
<hr>
<?php
$_SESSION['hang'] = array();
    if(!isset($_SESSION['armuahang'])){
        echo "BẠN CHƯA CÓ HÀNG TRONG GIỎ" . "<br>";
    }else{
        foreach($_SESSION['armuahang'] as $hang){ 
            
        ?>
        
    <form method='post' action='<?=$SITE_URL?>/gio-hang/gio-hang.php'><button class='garban' type='submit' name='garban'><i class="fa-solid fa-trash-can can"></i></button>
        <div class="shopping-cart">
            <img src='<?= $CONTENT_URL ?>/img/<?= $hang['hinh'] ?>' />
            
            <div class="shopping-items" id='shopping_items_<?=$hang['id']?>'>
                <h5><?=$hang['ten']?></h5>
                <input oninput="myFunction_<?=$hang['id']?>(this)" id='item_quantity_<?=$hang['id']?>' name='soluong_<?=$hang['id']?>' type='number' class='item-quantity' value='1'  min='1'/>
        
                <span>Giá:    <input disabled type='number' class='price_1' id='price_<?=$hang['id']?>' value='<?=$hang['giamoi']?>'/> Đơn vị: VNĐ</span><br>
            <h4>Thành tiền:<input class='thanh-tien'  oninput="myTotal_<?=$hang['id']?>(this)" type='text'  id='thanhtien_<?=$hang['id']?>' name='thanhtien_<?=$hang['id']?>' value='<?=$hang['giamoi']?>'/>đ</h4>
            
            </div>
        </div>
        <hr>
            <script>
                arr.push(document.getElementById("price_<?=$hang['id']?>").value)
                function myFunction_<?=$hang['id']?>(obj) {
                var x = obj.value;
                document.getElementById("thanhtien_<?=$hang['id']?>").value = x*document.getElementById('price_<?=$hang['id']?>').value;
                
                console.log(Number(document.getElementById("thanhtien_<?=$hang['id']?>").value))
}

            </script>

<?php     
array_unshift($_SESSION['hang'], $hang);
    
        }
    }
    $tong = 0;
    
     if(isset($_POST['garban'])){
         unset($_SESSION['hang']);
         unset($_SESSION['armuahang']);
     }
     if(isset($_POST['capnhat'])){
         foreach($_SESSION['armuahang'] as $hang){
            $duong = 'thanhtien_'. $hang['id'];
             $tong +=$_POST[$duong];
            
    }}else{
        echo '';    
    }
    if(isset($_SESSION["user"]['ma_kh'])){
             echo "<button type='submit'class='link-cart-infor' name='thanhtoan'>Thanh Toán</button>";
             }else{
                 echo 'vui lòng đăng nhập để thanh toán';
             }
?> 

<input type='hidden' name='date' value='<?=date("Y/m/d");?>' />
        </form>


<div class="cart-infor">
    <h4>Lịch sử đặt hàng:<h4>
    <hr>
 
 
 <a href='<?=$SITE_URL?>/don-hang/don-hang.php'><i class="fa-solid fa-basket-shopping"></i>Lịch sử đặt hàng</a>
    <hr>
    
    
</div>
 <?php
    if(isset($_POST['thanhtoan'])){
         
        $ngay_mua = $_POST['date'];
        $ma_kh = $_SESSION["user"]['ma_kh'];
        hoa_don_insert($ngay_mua,$ma_kh);
      $item =  hoa_don_hien_tai($ma_kh);
    
      foreach($_SESSION['armuahang'] as $hang){
        $so = 'soluong_'. $hang['id'];
        $ma_hd = $item['ma_hd'];
        $ma_hh = $hang['id'];
        $so_luong = $_POST[$so];
        $gia_ca = $hang['giamoi'];
        $thanh_tien = $so_luong*$gia_ca;
        // unset($_SESSION['armuahang']);
        hoa_don_chi_tiet_insert($ma_hd,$ma_hh,$so_luong,$gia_ca,$thanh_tien);
        
    }
    
}else{
    echo '';
}




// var_dump($_SESSION['hang']);
// echo "$_SESSION['hang']['id']";
if(isset($_POST['garban'])){
    if(isset($_SESSION['hang']['id'])){
        unset($_SESSION['hang']);
    }
}



// for($i=0; $i < count($_SESSION['hang']) ; $i++){ echo $i;?>

<!-- // <form method='post' action='<?=$SITE_URL?>/gio-hang/gio-hang.php'><button class='garban' type='submit' name='garban_<?=$i?>'><i class="fa-solid fa-trash-can can"></i></button>
//         <div class="shopping-cart">
//             <img src='<?= $CONTENT_URL ?>/img/sanpham/<?=$_SESSION['hang'][$i]['hinh'] ?>' />
            
//             <div class="shopping-items" id='shopping_items_<?=$i?>'>
//                 <h5><?=$_SESSION['hang'][$i]['ten']?></h5>
//                 <input oninput="myFunction_<?=$i?>(this)" id='item_quantity_<?=$i?>' name='soluong_<?=$i?>' type='number' class='item-quantity' value='1'  min='1'/>
        
//                 <span>Giá:    <input disabled type='number' class='price_1' id='price_<?=$i?>' value='<?=$_SESSION['hang'][$i]['giamoi']?>'/> Đơn vị: VNĐ</span><br>
//             <h4>Thành tiền:<input class='thanh-tien'  oninput="myTotal_<?=$i?>(this)" type='text'  id='thanhtien_<?=$i?>' name='thanhtien_<?=$i?>' value='<?=$_SESSION['hang'][$i]['giamoi']?>'/>đ</h4>
            
//             </div>
//         </div>
//         <hr>

//         

   
//             <script> -->
                
                
<!-- //                 arr.push(document.getElementById("price_<?=$i?>").value)
//                 function myFunction_<?=$i?>(obj) {
//                 var x = obj.value;
//                 document.getElementById("thanhtien_<?=$i?>").value = x*document.getElementById('price_<?=$i?>').value; -->
                
                


             </script>

 <?php




// }

// if(isset($_SESSION["user"]['ma_kh'])){
//     echo "<button type='submit'class='link-cart-infor' name='thanhtoan'>Thanh Toán</button>";
//     }else{
//         echo 'vui lòng đăng nhập để thanh toán';
//     }

    
//  ?>
 </form>


 



