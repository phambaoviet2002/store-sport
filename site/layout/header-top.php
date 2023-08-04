<nav>
<img src="<?=$CONTENT_URL?>/img/three.jpg" alt="" class="three-line" onclick='hanledMenu()'>
<a href="<?=$SITE_URL?>/trang-chinh?trang-chu">
  <img src="https://theme.hstatic.net/200000247969/1000814323/14/logo.png?v=73" alt="" />
</a>
        <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
            <input name="keywords" type="text" placeholder="Tìm kiếm sản phẩm..." class="search">
            <i class="fa-brands fa-searchengin bc" style="font-size:24px;color:black;" ></i>
        </form>
        <div class="dang-nhap"  >
            <i  class="fa-sharp fa-solid fa-user-plus"  style="font-size:24px;color:red;"></i>
            <?php
            if(isset($_SESSION["user"])){
              echo  '<span onclick="handleInfor()">Xin chào ' .$_SESSION["user"]["ho_ten"]. ' !</span>';
            }else{
              echo  '<span onclick="handleUser()">Đăng nhập/Đăng kí</span>';}
            ?>
        </div>
        <div class="gio-hang">
            <a href='<?=$SITE_URL?>/gio-hang/gio-hang.php'>  
            <i class="fa-sharp fa-solid fa-cart-shopping" style="font-size:24px;color:red;"></i>
            <span style='color: #fff'>Giỏ hàng</span>
            <a>
        </div>
            </nav>
<script>
  
var user = 1
      function  handleUser(){
        user++
        if(user ===3){
          user = 1
        }
        

        if (user === 1){
        document.getElementById("dang_nhap_form").style = "display: none"
        }else{
          document.getElementById("dang_nhap_form").style = "display: block"
        }

        if(user !== 1){
          window.addEventListener('scroll', () =>{
            if(window.scrollY >= 200){
              document.getElementById("dang_nhap_form").style = "display: none"
            }
          })

          function handleScroll(){
            console.log(window.scrollY)
          }
        }
        
        console.log(user)
        
      }
      function handleInfor(){
        user++
        if(user ===3){
          user = 1
        }
        

        if (user === 1){
        document.getElementById("dang_nhap_infors").style = "display: none"
        }else{
          document.getElementById("dang_nhap_infors").style = "display: block"
        }

        if(user !== 1){
          window.addEventListener('scroll', () =>{
            if(window.scrollY >= 200){
              document.getElementById("dang_nhap_infors").style = "display: none"
            }
          })

          function handleScroll(){
            console.log(window.scrollY)
          }
        }
        
        console.log(user)
      }
console.log('aaa')
</script>