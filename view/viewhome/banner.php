<style>
    .carousel-caption{
    text-align: left;
    left: 5%; top: 30%;
    color:black;
}   
.carousel-caption h5{
    font-size: 50px ;
}
.carousel-caption button{
   border-radius: 30px;
}
.slide2edit{
    text-align: center;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -40%);
    color:black;
    width: 70%;

}
.carousel-caption p{
    font-family: 'SamsungOne400', arial, sans-serif;
    font-size: 18px ;
}
.carousel-item {
    transition: transform 0.5s ease, opacity 0.5s ease !important; 
}
.btnslidewhite{
background-color: white;
color: black;   
}
.btnslide{
    font-size: 14px;
    height: 40px;
    width: 110px;
    margin-top: 20px;
}
.slide2edit h5{  
    font-size: 40px !important;
     line-height: 0.3;
    font-family: roboto;
    font-weight: 600 ;
}
.btnslide4{ 
    font-size: 14px;
height: 40px;
width: 150px;
margin-top: 20px;
}
.slideshow1button button{
  height: 2px !important; 
  margin: 0 7px !important; 
  margin-bottom: 3% !important;
  background-color: #6d6d6d !important; 
  transition: opacity 0.3s !important; 
}
.slideshow1button button:hover {
  background-color: #343434 !important;
}
.carousel-caption button:hover{
background-color: #e0e0e0;
}
.carousel-control-prev .bi-arrow-left-circle,
.carousel-control-next .bi-arrow-right-circle {
  font-size: 2rem; 
  color: #333;
}
.carousel-control-next {
  right: 0 !important; 
}
.carousel-control-prev, .carousel-control-next {
  padding: 0 !important; 
}
.carousel-indicators button {
    background-color: rgb(69, 69, 69) !important; 
    width: 25% !important;
}
.carousel-control-prev {
  left: 0 !important; 
}

</style>

<div class="container"> 
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-interval="1500" data-bs-ride="carousel">
            <div class="slideshow1button carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval="4750">
              <video class="img-fluid d-block w-100" autoplay loop muted >
                   <source src="./image/Samsung Viet Nam Thiet Bi Di Đong Tivi Đien Gia Dung.webm" type="video/mp4">   
                              </video>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Galaxy Z Fold6</h5><br>
                  <p>Tặng Galaxy Watch6 Classic khi mua màu độc quyền. Ưu đãi x2 đổi điểm<br> Rewards tối thiểu 1 triệu</p>
                  <button class=" btnslide btn btn-dark">Mua ngay</button>

                </div>
              </div>
              <div class="carousel-item">
                <img src="./image/Pre-order_KV_Dotcom_H_PC1.png" class="d-block w-100" alt="...">
                <div class="slide2edit carousel-caption d-none d-md-block ">
                <h5 style=" font-weight: 550 !important;font-size:35px !important;" >Trải nghiệm Samsung AI TV đỉnh cao</h5> <br>
                <h5 >NEO QLED | NEO QLED 8K | OLED </h5>
                  <button class=" btnslide btn btn-dark">Mua ngay</button>

                </div>
              </div>
              <div class="carousel-item">
                <img src="./image/1440x640_disclaimer.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: white;">Tủ lạnh số 1 Thế Giới<br>và Việt Nam</h5> <br>
                  <p style="color: white;">Chuyên gia tươi ngon - Dẫn đầu thiết kế - Tiên phong AI </p>
                  <button class="btnslide btnslidewhite btn btn-dark">Mua ngay</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./image/HOME_TS10-Series_Main-KV_1440x640_pc.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                 <h5 >Galaxy Tab S10 Series</h5> <br>
                  <p  >Thu cũ đổi mới hỗ trợ thêm 3 triệu. Thanh toán trước ưu đãi đến 1 triệu</p>
                  <button class="btnslide  btn btn-dark">Mua ngay</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./image/1029_PC.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: white;">Samsung West Lake</h5> <br>
                  <p style="color: white;" >Nhận ngay túi xách thời gian và mã giảm giá đến 2 triệu đồng khi đăng kí trải<br> nghiệm. Áp dụng đến 31.10.2024</p>
                  <button class="btnslide4 btnslidewhite btn btn-dark">Đăng kí ngay</button>
                </div>
              </div>
            </div>          
            <button style=" width:4%;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class=" bi bi-arrow-left-circle" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button style=" width:4%;" class=" carousel-control-next py-40" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class=" bi bi-arrow-right-circle"  aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>        
          </div>
    </div>