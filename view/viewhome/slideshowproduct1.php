<style>

.product-item {
  background: #f7f7f7;
  padding: 20px;
  text-align: center;
  font-size: 16px;
  border-radius: 30px;
  height: 300px;
  margin: 10px;
}
.product-item {
  width: 100px; 
  height: 300px;
  position: relative;
}
.tuanlesamsung{
  width: 95%;
}
.product-text {
  position: absolute;
  bottom: 0; 
  left: 0%;
  padding: 15px; 
  width: 100%; 
  text-align: center;
}
.product-item {
  background: #f7f7f7;
  padding: 20px;
  text-align: center;
  font-size: 16px;
  border-radius: 30px;
  height: 300px;
  margin: 10px;
}


.product-item:hover img{
  transform: scale(1.1);
}
.product-item img{
  margin-top: 10%;
  transform: scale(1.06);
  transition: transform 0.2s ease;
}

.tuanlesamsung{
  width: 95%;
}
</style>

<div class=" container">

    <h2 style="font-size: 28px;">Khám phá bộ siêu phẩm AI</h2> 
       <div class="product-slider" >
        <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-pet-lovers-2_pc_330x330.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Bespoke AI Laundry giặt sạch lông và mùi thú cưng</span>
      </div>
      
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-pet-lovers-4_pc_330x330.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Bespoke Jet AI giải quyết lông pet dễ dàng với AI Cleaning</span>
      </div>
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-pet-lovers-5_pc_330x330.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">NEO QLED 8K AI nâng tầm trải nghiệm âm thanh</span>
      </div>
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-pet-lovers-1_pc_330x330_new.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Galaxy Z Flip6 dễ dàng selfie cùng thú cưng với FlexCam  </span>
      </div>
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-energy-saving-4_pc_330x330.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Máy giặt thông minh Samsung Bespoke AI tiết kiệm tới 70%</span>
      </div>
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/REF-PC.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Tủ lạnh Bespoke tiết kiệm tới 10%</span>
      </div>
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-travel-2_pc_330x330.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Bespoke Jet Bot AI+ Giám sát nhà cửa khi đi du lịch</span>
      </div>
      <div class="product-item" style="position: relative; overflow: hidden; width: 100%; height: 300px;" >
          <img src="./image/co05_showcase-card-tab-home-entertainment-4_pc_330x330.png" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Lò nướng Bespoke Nấu ăn thông minh với AI</span>
      </div>
      </div>
      <br><br><br>
      <script>
 
$(document).ready(function(){
  $('.product-slider').slick({
    slidesToShow: 5,       
    slidesToScroll: 1,     
   autoplay: true,
    autoplaySpeed: 1500,             
    infinite: true,       
    speed: 500,           
    cssEase: 'ease-in-out' 
  });
});
</script>