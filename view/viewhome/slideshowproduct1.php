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
  transform: scale(1.04);
}
.product-item img{
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
          <img src="./image/PC_RT42CB6784C3SV.jpg" alt="" class="img-fluid" style=" width: 100%; height: auto; object-fit: cover;position: absolute; top: 0; left: 0;">
          <span class="product-text">Tủ Lạnh Bespoke 406L thêm deal chồng deal tại Shop App từ 29.10</span>
      </div>
      
        <div class="product-item" style="position: relative; ">  <span class="product-text">Sản phẩm 1</span></div>
        <div class="product-item" style="position: relative; ">  <span class="product-text">Sản phẩm 1</span></div>
        <div class="product-item" style="position: relative; ">  <span class="product-text">Sản phẩm 1</span></div>
        <div class="product-item" style="position: relative; ">  <span class="product-text">Sản phẩm 1</span></div>
        <div class="product-item" style="position: relative; ">  <span class="product-text">Sản phẩm 1</span></div>
        <div class="product-item" style="position: relative; ">  <span class="product-text">Sản phẩm 1</span></div>
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