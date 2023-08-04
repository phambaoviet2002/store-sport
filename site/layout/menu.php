<ul class="nav-home">
        <li ><a href="<?=$SITE_URL?>/trang-chinh?trang-chu" >Trang Chủ</a></li>
        <li onclick="handleMenu()" class='danh-muc'  >Danh mục sản phẩm</li>
        <li ><a href="<?=$SITE_URL?>/trang-chinh?gioi-thieu" >Giới thiệu</a></li>
        <li ><a href="<?=$SITE_URL?>/trang-chinh?lien-he" >Liên hệ</a></li>
        <li ><a href="<?=$SITE_URL?>/trang-chinh?tin-tuc" >Tin tức</a></li>
        
      </ul>

      <script>
  
var user = 1
      function  handleMenu(){
        user++
        if(user ===3){
          user = 1
        }
        if (user === 1){
        document.getElementById("danh_muc").style = "display: none"
        }else{
          document.getElementById("danh_muc").style = "display: block"
        }
      }
          </script>