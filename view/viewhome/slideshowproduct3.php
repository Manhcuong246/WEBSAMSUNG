<style>
    .product-item2 {
        text-align: center;
        font-size: 16px;
        position: relative;
        overflow: hidden;
        height: 600px;
        margin: 0 10px;
   
    }

    .product-text {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 15px;
        width: 100%;
        text-align: center;
    }

    .product-item2:hover img {
        transform: scale(1.04);
    }

    .product-item2 img {
        transition: transform 0.2s ease;
    }

    .product-slider2 {
        height: 600px;
    }

    .productitem-img {
      margin-bottom: 25px;
        border-radius: 15px;
        width: 100%;
        height: 250px;
        overflow: hidden;
       
    }

    .productitem-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .productitem-title{
      position: absolute;
     
      left: 50%;
      transform: translate(-50%,0);
  
      height: 15%;
      width: 90%;
    }
    .productitem-title h1{
      font-size: 32px;
    }
    .productitem-text p{
      font-family: 'SamsungOne400', arial, sans-serif;
      font-size: 14px;
    }
    .productitem-text{
      position: absolute;
      top:50%;
     left: 50%;
     transform: translate(-50%,250%);
  
     height: 5%;
     width: 90%;

    }
    .productitem-button{
      position: absolute;
      top:50%;
     left: 50%;
     transform: translate(-50%,200%);
     height: 15%;
     width: 90%;
   
    }
    .productitem-button button{
      background-color: unset;
      border: none;
    }
    .buttonslideshowproduct3{
            position: relative;
            padding: 10px 10px;
            font-size: 16px;
            color: #000;
            background-color: transparent;
            border: none;
            cursor: pointer;
            overflow: hidden;
    }
    .buttonslideshowproduct3::before {
            content: '';
            position: absolute;
            top: 80%;
            left: 0;
            height: 2px;
            width: 100%;
            background-color: gray;
            transform: translateY(-50%) scaleX(0);
            transition: transform 0.4s ease;
        }

        .buttonslideshowproduct3:hover::before {
            transform: translateY(-50%) scaleX(1);
        }
</style>

<div class="container-fluid" style="text-align: center; margin-top:90px;">
    <h2 style="font-size: 45px; margin-bottom: 70px;">Khám phá sự kiện hấp dẫn đang diễn ra</h2>
</div>

<div class="container">
    <div class="product-slider2">
        <div class="product-item2">
            <div class="productitem-img">
                <img src="./image/PC_1.png" alt="" class="img-fluid">
                 </div>
            <div class="productitem-title">
            <h1>Hà Nội ơi, đáp lời nhé! </h1>
            </div>
            <div class="productitem-text">
            <p>Rước voucher đến 2 triệu mua sắm tại Samsung West Lake. Đáp lời ngay! </p>
            </div>
            <div class="productitem-button">
            <button class="buttonslideshowproduct3">Tìm hiểu thêm <i class="bi bi-arrow-up-right"></i>
            </button>
            </div>
      
        </div>
        <div class="product-item2">
            <div class="productitem-img">
                <img src="./image/PC_2.png" alt="" class="img-fluid">
                 </div>
            <div class="productitem-title">
            <h1>Tour Bát Phố Samsung: Hà Nội Khúc Giao Mùa </h1>
            </div>
            <div class="productitem-text">
            <p>Tặng túi thời trang khi khám phá không gian công nghệ tinh hoa. </p>
            </div>
            <div class="productitem-button">
            <button class="buttonslideshowproduct3" >Tìm hiểu thêm <i class="bi bi-arrow-up-right"></i>
            </button>
            </div>
      
        </div>
        <div class="product-item2">
            <div class="productitem-img">
                <img src="./image/PC_4.png" alt="" class="img-fluid">
                 </div>
            <div class="productitem-title">
            <h1>Galaxy Wraps</h1>
            </div>
            <div class="productitem-text">
            <p>Cá nhân hóa điện thoại Galaxy theo phong cách của bạn. </p>
            </div>
            <div class="productitem-button">
            <button class="buttonslideshowproduct3" >Tìm hiểu thêm <i class="bi bi-arrow-up-right"></i>
            </button>
            </div>
      
        </div>
        <div class="product-item2">
            <div class="productitem-img">
                <img src="./image/PC_1.png" alt="" class="img-fluid">
                 </div>
            <div class="productitem-title">
            <h1>Hà Nội ơi, đáp lời nhé! </h1>
            </div>
            <div class="productitem-text">
            <p>Rước voucher đến 2 triệu mua sắm tại Samsung West Lake. Đáp lời ngay! </p>
            </div>
            <div class="productitem-button">
            <button class="buttonslideshowproduct3" >Tìm hiểu thêm <i class="bi bi-arrow-up-right"></i>
            </button>
            </div>
      
        </div>
        <div class="product-item2">
            <div class="productitem-img">
                <img src="./image/PC_2.png" alt="" class="img-fluid">
                 </div>
            <div class="productitem-title">
            <h1>Tour Bát Phố Samsung: Hà Nội Khúc Giao Mùa </h1>
            </div>
            <div class="productitem-text">
            <p>Tặng túi thời trang khi khám phá không gian công nghệ tinh hoa. </p>
            </div>
            <div class="productitem-button">
            <button class="buttonslideshowproduct3" >Tìm hiểu thêm <i class="bi bi-arrow-up-right"></i>
            </button>
            </div>
      
        </div>
        <div class="product-item2">
            <div class="productitem-img">
                <img src="./image/PC_4.png" alt="" class="img-fluid">
                 </div>
            <div class="productitem-title">
            <h1>Galaxy Wraps</h1>
            </div>
            <div class="productitem-text">
            <p>Cá nhân hóa điện thoại Galaxy theo phong cách của bạn. </p>
            </div>
            <div class="productitem-button">
            <button class="buttonslideshowproduct3" >Tìm hiểu thêm <i class="bi bi-arrow-up-right"></i>
            </button>
            </div>
      
        </div>
    </div>
    
</div>

<br><br><br>

<script>
    $(document).ready(function() {
        $('.product-slider2').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            speed: 2000,
            cssEase: 'ease-in-out',
            swipeToSlide: true, 
            draggable: true,
            pauseOnHover: false
        });
    });
</script>
