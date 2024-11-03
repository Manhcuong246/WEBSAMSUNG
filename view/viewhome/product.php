<style>
    .product {
        height: auto;
        width: 80%;
    }
    .productitem {
        height: 620px;
        background-color: #f7f7f7;
        border-radius: 30px;
        padding-top: 20%;
        text-align: center;
    }
    .nameitem {
        padding-left: 10%;
        padding-right: 10%;
        height: 70px;
    
    }
   .imgitem{ 
    display: flex; 
    justify-content: center;
    align-items: center; 
    overflow: hidden;

}
   .imgitem img {
    
    height: 220px;
    object-fit: cover; 
    object-position: center;
}
    .nameitem p {
        margin-top: 20px;
        word-wrap: break-word;
        font-weight: bolder !important;
        font-size: 17px;
    }

    .coloritem {
        padding-left: 10%;
        padding-right: 10%;
        height: 70px;

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
        opacity: 0.7 !important;
      transition: transform 0.3s ease !important;
       height: 20px !important;
       width: 20px !important;
       border-radius: 50%;
    
    }
 
.buttoncolorproduct{
    position: absolute;
    top: 340px;
    gap:20px;
}
.buttoncolorproduct button.active {
    opacity: 0.7;
    transform: translate(0, -5px) !important;
    box-shadow: inset 0 0 0 1px black !important;
} 
.costitem{
    margin-top: 20px;
    height: 40px;
   
}
.costitem p{
    margin: 0; line-height: 1;
   font-size: 20px;
}
.costitem del{
    margin: 0; 
    line-height: 1;
     font-size:14px;font-family: 'SamsungOne400', arial, sans-serif; 
     font-weight: 400;
     }
          
     .buttonitem button{
     
        margin-top: 30px;
        transition: background-color 0.5s ease;
        background-color: black;
        color: white;
        width: 80%;
        height: 40px;
        border-radius: 20px;
        border:none;

     }
     .buttonitem button:hover{
        background-color: #919191;
     }
</style>
<br><br><div class="product container">
    <div class="row" style="height: 100%;">
        <div class="col-3 py-1">
            <div class="productitem">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="buttoncolorproduct carousel-indicators">
                        <button style="background-color: pink !important" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button style="background-color: black !important;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button style="background-color: blue !important;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="imgitem">
                                <img src="./image/vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png" style="object-position: center !important;" alt="">
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
                    <p>32 Inch odysssey G5 G55C QHD 165Hz Màn hình Gaming</p>
                </div>
                <div class="coloritem">
                    <p>Màu sắc: <span>Tím Latic</span></p>
                </div>
                <div class="costitem">
                    <p>9.000.000 VND</p>
                    <del>10.000.000 VND</del>
                </div>
                <div class="buttonitem">
                    <button>Mua ngay</button>
                </div>
            </div>
        </div>
     
        <div class="col-3 py-1">
        <div class="productitem">
                <div id="carouselExampleIndicators2" class="carousel slide">
                    <div class="buttoncolorproduct carousel-indicators">
                        <button id="mybutton1" style="background-color: pink !important" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button id="mybutton2" style="background-color: black !important;" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button id="mybutton3" style="background-color: blue !important;" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="imgitem">
                                <img src="./image/Watch7_PC-v2.png" style="object-position: center !important;" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="imgitem">
                                <img src="./image/vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="imgitem">
                                <img src="./image/pc-QA65QE1CAKXXV.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nameitem">
                    <p>32 Inch odysssey G5 G55C QHD 165Hz Màn hình Gaming</p>
                </div>
                <div class="coloritem">
                    <p>Màu sắc: <span id="myText">Tím Latic</span></p>
                </div>
                <div class="costitem">
                    <p>9.000.000 VND</p>
                    <del>10.000.000 VND</del>
                </div>
                <div class="buttonitem">
                    <button>Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      // vòng lặp chỗ này 
        const button = document.getElementById('mybutton1');
        const text = document.getElementById('myText');

        button.addEventListener('click', function() {
            text.textContent = 'Tím Latic';
        });
        const button2 = document.getElementById('mybutton2');
        const text2 = document.getElementById('myText');

        button2.addEventListener('click', function() {
            text2.textContent = 'Xanh lá cây';
        });  
        const button3 = document.getElementById('mybutton3');
        const text3 = document.getElementById('myText');

        button3.addEventListener('click', function() {
            text3.textContent = 'Đen xám';
        });      
    </script>