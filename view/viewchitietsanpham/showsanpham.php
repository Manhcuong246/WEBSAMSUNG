<style>
    .title {
        background-color: black;
        height: 85px;
    }

    .product {

        height: 700px;
    }

    .titleleft {

        height: 100%;
        padding-left: 4%;
        display: flex;
        align-items: center;
    }

    .titlenameproduct {
        height: 100%;
        width: 50%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 5px;
    }

    .titlenameproduct p {
        color: white;
        font-size: 25px;
    }

    .costproduct {
        padding: 0;

    }

    .btnbuttonaddcart {

        height: 85px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btnaddcart {
        transition: all 0.5s ease;
        background-color: #2089fe;
        width: 73%;
        font-size: 14px;
        text-shadow: 1px 1px 4px gray;
        height: 40px;
        border-radius: 20px;
    }

    .costtop {

        height: 42.5px;
        width: 100%;
        text-align: right;
        padding-top: 15px;

    }

    .costtop p {
        color: white;
        font-size: 25px;

    }

    .costbot {
        height: 42.5px;
        width: 100%;
        text-align: right;

        padding-top: 10px;
    }

    .costbot p {

        color: #6495ED;
        font-size: 12px;


    }

    .costbot del {

        color: white;
        font-size: 12px;

    }

    .imgpro {
        height: 100%;
    }

    .detailpro {
        height: 100%;

    }

    .thumbnail {
        width: 10%;
        height: 9%;
        cursor: pointer;
        opacity: 0.6;
        transition: opacity 0.3s;
    }

    .thumbnail:hover {
        opacity: 1;
    }

    .carousel-item {
        overflow: hidden;
        width: 100%;
        height: 85%;

    }

    .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .imgabcxyz {
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .imgabcxyz img {
        object-fit: cover;
    }

    .detailpro {
        overflow: hidden;
        overflow-y: auto;
    }

    .detailpro2 {
        padding-top: 8%;
        display: flex;
        justify-content: center;

        height: 150%;
        width: 100%;

    }

    .detailpro::-webkit-scrollbar {
        display: none;
    }

    .namepro {

        height: 10%;

    }

    .namepro p {
        font-size: 27px;

    }

    .detail {

        background-color: white;
        height: 25%;
        color: black;
        font-family: 'SamsungOne400', arial, sans-serif;
        font-size: 15px;
        display: flex;



    }

    .thucudoimoi {

        height: 50%;
        width: 100%;

    }


    .thucudoimoibot button {
        transition: all 0.5s ease;
        text-align: left;
        font-size: 15px;
        padding-left: 30px;
        width: 100%;
        background-color: white;
        border-radius: 7px;
        border: 1px solid #D3D3D3;
        height: 55px;
        margin-top: 6px;

    }

    .thucudoimoibot button:hover {

        border: 1px solid gray;

    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 title">
            <div class="row">
                <div class="col-8 titleleft">
                    <div class="titlenameproduct">
                        <p><?= mb_strimwidth('25kg Bespoke AI Laundry Combo™ Máy Giặt Sấy Cửa Trước với Sấy Bơm Nhiệt Heatpump', 0, 75, '...') ?>
                        </p>
                    </div>
                </div>
                <div class="col-4 titleright">
                    <div class="row">
                        <div class="costproduct  col-6">
                            <div class="costtop col-12">
                                <p>6.000.000 đ</p>
                            </div>
                            <div class="costbot col-12">
                                <p><del>12.000.000 đ</del> Tiết kiệm đến 6.000.000 đ</p>
                            </div>
                        </div>
                        <div class="btnbuttonaddcart col-6">
                            <button class="btnaddcart btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 product">
            <div class="row" style="height: 100%;">
                <div class="imgpro col-6">
                    <div class="container ">
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./image/vn-wd8000dk-wd25db8995bzsv-543263642.png" class="d-block w-100 " alt="Product Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="./image/vn-wd8000dk-wd25db8995bzsv-543263616.png" class="d-block w-100 " alt="Product Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="./image/vn-wd8000dk-wd25db8995bzsv-543263617.png" class="d-block w-100 h-100" alt="Product Image 3">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="imgabcxyz d-flex justify-content-center mt-3">
                            <img src="./image/vn-wd8000dk-wd25db8995bzsv-543263642.png" class="thumbnail img-thumbnail mx-1" alt="Thumbnail 1" data-bs-target="#productCarousel" data-bs-slide-to="0">
                            <img src="./image/vn-wd8000dk-wd25db8995bzsv-543263616.png" class="thumbnail img-thumbnail mx-1" alt="Thumbnail 2" data-bs-target="#productCarousel" data-bs-slide-to="1">
                            <img src="./image/vn-wd8000dk-wd25db8995bzsv-543263617.png" class="thumbnail img-thumbnail mx-1" alt="Thumbnail 3" data-bs-target="#productCarousel" data-bs-slide-to="2">

                        </div>

                    </div>

                </div>
                <div class="detailpro  col-6 p-0">
                    <div class="detailpro2 ">
                        <div class="row" style="height: 100%;width:80%;">
                            <div class=" col-12 ">
                                <div class="row">
                                    <div class="namepro col-12 p-0 ">
                                        <p>25kg Bespoke AI Laundry Combo™ Máy Giặt Sấy Cửa Trước với Sấy Bơm Nhiệt Heatpump</p>
                                    </div>
                                    <div class="detail col-12 ">
                                        <p>Bespoke AI Laundry Combo™ 25kg là giải pháp hoàn hảo cho nhu cầu giặt sấy lớn, với khả năng giặt lên đến 25kg quần áo, phù hợp với các gia đình hoặc doanh nghiệp có nhu cầu giặt giũ nhiều. Máy được trang bị công nghệ AI thông minh, giúp tối ưu hóa quá trình giặt và sấy, mang lại hiệu quả cao và tiết kiệm năng lượng. Đặc biệt, với hệ thống sấy bơm nhiệt Heatpump, máy giặt sấy này không chỉ tiết kiệm điện mà còn bảo vệ quần áo tốt hơn, giữ cho sợi vải không bị hư hại bởi nhiệt độ cao. Thiết kế cửa trước hiện đại, dễ sử dụng và mang lại vẻ sang trọng cho không gian nhà bạn.</p>
                                    </div>
                                    <div class="thucudoimoi col-12 p-0 ">
                                        <div class="thucudoimoitop col-12 ">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6" style="font-size: 25px;">Thu cũ đổi mới </div>
                                                    <div class="col-6" style="text-align:right;"> <a href="#" style="text-decoration: none;color:black;">Tìm hiểu thêm<i class="bi bi-arrow-up-right"></i>
                                                        </a> </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="font-size: 13px; line-height:2.5;   font-family: 'SamsungOne400', arial, sans-serif;">Tham gia thu cũ, lên đời sản phẩm mới với ưu đãi hấp dẫn dành riêng cho bạn.</div>
                                        </div>
                                        <div class="thucudoimoibot col-12  ">
                                            <button>Tham gia</button>
                                            <button>Không, cảm ơn</button>
                                        </div>
                                        <div class="chonmau col-12  " style="margin-top:20px;">
                                           <p style="font-size: 25px;">  Chọn màu sắc </p>
                                           <p style="font-size: 15px;"> Màu Sắc :  <span style="font-family: 'SamsungOne400', arial, sans-serif;">Đen bí ẩn</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "./view/viewhome/footer.php" ?>