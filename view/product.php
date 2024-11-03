<style>
    .product {
        height: auto;
        width: 80%;
    }
    .productitem {
        height: 650px;
        background-color: beige;
        border-radius: 30px;
        padding-top: 20%;
        text-align: center;
    }
    .nameitem {
        padding-left: 10%;
        padding-right: 10%;
        height: 70px;
        background-color: red;
    }
   .imgitem{ 
    display: flex; /* Sử dụng Flexbox */
    justify-content: center; /* Căn giữa theo chiều ngang */
    align-items: center; /
    overflow: hidden;

}
   .imgitem img {
    
    height: 220px;
    object-fit: cover; 
    object-position: center;
}
    .nameitem p {
        word-wrap: break-word;
        font-weight: bolder !important;
        font-size: 17px;
    }

    .coloritem {
        padding-left: 10%;
        padding-right: 10%;
        height: 70px;
        background-color: white;
    }

    .coloritem p {
        font-size: 12px;
        font-weight: bold;
    }

    .coloritem p span {
        font-size: 12px;
        font-family: 'SamsungOne400', arial, sans-serif;
        font-weight: 400;
    }

    .buttoncolorproduct button{
       height: 20px !important;
       width: 20px !important;
       border-radius: 50%;
    
    }
 
.buttoncolorproduct{
    position: absolute;
    top: 310px;
    gap:25px;
}
.buttoncolorproduct button.active {
    background-color: red !important; 
    box-shadow: inset 0 0 0 1px black !important;
} 
.costitem{
    margin-top: 20px;
    height: 40px;
    background-color: red;
}
.costitem p{
   font-size: 20px;
}
</style>
<br><br>
<div class="product container">
    <div class="row" style="height: 100%;">
        <div class="col-3 py-1">
            <div class="productitem">
                <div class="imgitem">
                    <img src="./image/vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png"  alt="">
                </div>
                <div class="nameitem">
                    <p>Galaxy Watch FE</p>
                </div>
                <div class="coloritem">
                    <p>Màu sắc: <span>Tím Latic</span></p>
                </div>
            </div>
        </div>
        <div class="col-3 py-1">
            <div class="productitem">
            <div id="carouselExampleIndicators" class="carousel slide">
  <div class="buttoncolorproduct carousel-indicators" >
    <button  style="background-color: pink !important"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button  style="background-color: black !important;"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button  style="background-color: blue !important;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        
                <div class="imgitem">
                    <img src="./image/vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png" style="  object-position: center !important;" alt="">
                </div>
    </div>
    <div class="carousel-item">
          <div class="imgitem">
                    <img src="./image/vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png" alt="">
                </div>
    </div>
    <div class="carousel-item">
    <div class="imgitem">
                    <img src="./image/vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png" alt="">
                </div>
    </div>
  </div>
</div>
                <div class="nameitem">
                    <p>Galaxy Watch FE</p>
                </div>
                <div class="coloritem">
                    <p>Màu sắc: <span>Tím Latic</span></p>
                </div>
                <div class="costitem">
                    <p>9.000.000 VND</p>
                </div>
            </div>
        </div>
    </div>
</div>
