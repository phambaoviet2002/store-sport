
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?=$CONTENT_URL?>/fonts/font.css" rel="stylesheet" />
    <link href="<?=$CONTENT_URL?>/css/css.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
*{
  font-family: "Roboto", sans-serif;
}
.three-line{
  display: none;
}
nav{
  background-color: #222222;
  display: flex;
  gap: 4rem;
  color: white;
  align-items: center;
  justify-content: center;
  height: 100px;
}
nav>img{
  width: 18%
}
.search{
  border-color: red;
  border-radius: 3px;
  width: 488px;
  height: 41px;
}
form{
  position: relative;
}
.nav-center{
  display: flex;
  justify-content: center;
  gap: 2rem;
}
.nav-home{
  display: flex;
  justify-content: center;
  gap: 3rem;
}
.nav-home  li{
  
  list-style: none;
  
}
.nav-home li a{
  text-decoration: none;
  color: gray;
}
.bc{
  background-color: red;
  padding: 0.7rem 0.7rem 0.7rem 0.7rem; 
  border-radius: 3px;
  position: absolute;
  right: 0.1rem;
  top: 0px;
}

.dang-nhap, .gio-hang{
  cursor: pointer;
}
.danh-muc{
  cursor: pointer;
}
#danh_muc{
  position: fixed;
  top: 9rem;
  left: 35rem;
  display: none;
}
.form-users{
  border: 1px solid gray;
  border-radius: 4px;
  width: 250px;
  padding: 1rem;
  position: fixed;
  top: 5rem;
  right: 13rem;
  background-color: white;
  display: none;
}
.form-infors{
  border: 1px solid gray;
  border-radius: 4px;
  width: 250px;
  padding: 1rem;
  position: fixed;
  top: 5rem;
  right: 13rem;
  background-color: white;
  display: none;
}
.banner{
  position: relative;
}

.banner:hover .btn-1, .banner:hover .btn-2{
  display: block;
}

.btn-1{
  position: absolute;
  top: 50%;
  left: 0px;
  display: none;
  width: 50px;
  height: 50px;
  border:1px solid gray;
  background-color: gray;
  opacity: 0.5;
}
.btn-2{
  position: absolute;
  top: 50%;
  right: 0px;
  width: 50px;
  height: 50px;
  display: none;
  border:1px solid gray;
  background-color: gray;
  opacity: 0.5;
}
  .banner{
  position: relative;
  width: 1453px;
  height: 575px;
}
.banner>img{
  width: 1453px;
  height: 575px;
}
.banner:hover .btn-1, .banner:hover .btn-2{
  display: block;
}

.btn-1{
  position: absolute;
  top: 50%;
  left: 0px;
  display: none;
}
.btn-2{
  position: absolute;
  top: 50%;
  right: 0px;
  display: none;
}

.ss2{
  width: 1460px;
  text-align: center;
  margin-top: 40px;
}
.wrap-items{
  gap: 2rem;
  margin-top: 40px;
}
.ss2-bottom{
  width: 97%;
  margin: 2rem;
}
.cart-items{
  width: 310px;
border: 1px solid gray;

margin-left: 1.5rem;
margin-bottom: 2rem;
text-align: center;
align-items: center;
}
.cart-items>a>img{
  width: 255px;
  height: 255px;
 padding: 1rem;
}
.anh-danhmuc{
  width: 255px;
  height: 255px;
 padding: 1rem;
}
.cart-title{
  white-space: nowrap;
  padding-left: 30px;
  width: 220px;
  padding-top: 2rem;
  text-overflow: ellipsis;
  overflow: hidden;
}
.cart-price{
  color: red;
  font-weight: 600;
}
.ss4{
  width: 1460px;
  height: 800px;
  padding: 2rem;
  
}
.total-product{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.cart-title-2{
  white-space: nowrap;
  
  width: 220px;
  padding-top: 2rem;
  text-overflow: ellipsis;
  overflow: hidden;
}
.items-total{
  display: flex;
}
.items-total>a>img{
  width: 150px;
  height: 150px;
}
.items-items{
  display: flex;
  flex-direction: column;
}
.two-img{
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin: 2rem 6rem;
}
.two-img>img{
  width: 100%;
}

.ss5{
  width: 1460px;
  height: 400px;
  padding: 2rem;
  
}


      #cart-items{
        margin-left: 20px;
        width: 250px;
        height: 380px;
    position: relative;
}

#cart-items a{
  position: absolute;
  bottom : 0;
  left: 0;
}
#cart-items img{
  width: 200px;
  height: 200px;
  object-fit: cover;
  padding-left: 10px;
  padding-top: 10px;
}
a{
    text-decoration: none;
  }
  .mg{
    margin-right: 50px;
  }
  #favic{
    width: 26px;
    height: 26px;
    object-fit: cover;
    
  }
  #lk{
    margin-top: 20px;
    color: #000;
  }
  .center{
    text-align: center;
    list-style: none;
  }
  .center ul li{
    list-style: none;
  }
  a{
    color: #000;
  }
  *{
    list-style: none;
  }
  #anhdaidien{
    width: 200px;
    height: 200px;
    object-fit: cover;
  }
 
  .footer-top{
  background-color: #222222;
  height: 430px;
  top: 170px;
  color: white;
}
.ror{
  margin-top: 40px;
}
.footer-top p{
  width: 200px;
  margin-top: 50px;
}
.footer-top{
  display: flex;
  justify-content: center;
  gap: 4rem;
}
.footer-bottom{
  background-color: #333333;
  
  height: 125px;
}
.footer-bottom p{
  width: 600px;
  text-align: center;
  margin:auto;
  color: white;
}
.item-quantity{
  width: 60px;
  height: 45px;
  border-radius: 3px;
  text-align: center;
}
.khung{
  padding: 0.8rem;
  width: 45px;
  height: 45px;
  border: 1px solid gray;
}
.add-cart{
  width: 470px;
  height: 45px;
  background-color: red;
  color: white;
  border: none;
}
.shopping-cart{
  display: flex;
  margin: 3rem;
  
}
.shopping-cart>img{
  width: 150px;
  height: 150px;
}
.garban{
  float: right;
}
.price_1{
  border: none;
  width: 100px;
}
.link-cart-infor{
  
  background: red;
  color: white;
  padding: 15px 50px 15px 50px;
  
}
.cart-infor{
  width: 300px;
  border: 1px solid gray;
  position: absolute;
  right: 3rem;
  top: 9rem;
  padding: 2rem;
}

.link-cart-infor:hover{
  cursor: pointer;
  color: white;
}
.thanh-tien{
  width: 150px;
  border: none;
}

  </style>
</head>
<body>
    
        
<div class='header-top'>
<?php  require "layout/header-top.php";?>
</div>

<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      
      <?php require "layout/menu.php" ?>
    </header>


<div class="row">
  <div class="col-sm-8">
  <article >
    <?php include $VIEW_NAME;?>
    </article>
  
    </div>
  <div class="col-sm-4 ">
    <aside>
      <!-- LOGIN -->

      <?php  require "layout/dang-nhap.php";?>

      <!-- CATALOG -->

      <?php  require "layout/loai-hang.php";?>
      

      <!-- <?php  require "layout/top10.php";?>  -->
    </aside>
  </div>
</div>

<?php  require "layout/footer.php";?>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

    <script>
    window.addEventListener('scroll', () =>{
            if(window.scrollY >= 50){
              document.getElementById("danh_muc").style = "display: none"
              document.getElementById("dang_nhap_form").style = "display: none"
              document.getElementById("dang_nhap_infors").style = "display: none"
            }
          })
  </script>
  <script>
    window.addEventListener('scroll', () =>{
            if(window.scrollY >= 50){
              
              document.getElementById("dang_nhap_infors").style = "display: none"
            }
          })
  </script>
  

</body>
</html>