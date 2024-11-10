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
   
        scroll-behavior: smooth;
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

    .color-option {

        width: 40px;
        height: 55px;
        cursor: pointer;
        margin-right: 20px;
    }

    .color-option input[type="radio"]:checked+.colorbutton {
        outline-offset: 2px;
        outline: 1px solid blue;
        opacity: 0.9;

    }

    .colorbutton {

        border: 0.5px solid black;
        transition: all 0.1s ease;
        opacity: 0.7;
        width: 18px;
        height: 18px;
        border-radius: 20px;

        transform: scale(2);
        margin: 10px;
        cursor: pointer;

    }

    .color-option input[type="radio"] {
        display: none;
    }

    .thucudoimoibot button:hover {

        border: 1px solid black;

    }

    .btnaddcart2 {

        transition: all 0.5s ease;
        background-color: #2089fe;
        width: 73%;
        font-size: 14px;
        text-shadow: 1px 1px 4px gray;
        height: 40px;
        border-radius: 20px;
    }

    .uudai2 {
        background-color: #f4f6fe;
        height: 150px;
        width: 100%;
        border-radius: 10px;
        margin-bottom: 80px;

    }

    .samsungcamketgia {
        background-color: #2089fe;
        width: 35%;
        font-size: 12px;
        height: 25px;
        border-radius: 20px;
        color: white;
        border: none;

    }

    .fathersamsungcamketgia {
        height: 60px;
        display: flex;
        align-items: center;
    }

    .areabuy {
        height: 350px;
        width: 100%;
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;

    }

    .contentareabuy {
        padding: 0;
        margin: 0;
        width: 80%;
        height: 100%;

    }

    .textareabuy {
        height: 35%;

    }

    .areabtnaddcart2 {

        display: flex;
        justify-content: center;
    }
</style>
<?php
$result = [];

foreach ($detail as $item) {
    $id = $item['id_sanpham'];

    if (!isset($result[$id])) {
        $result[$id] = [
            'id_sanpham' => $item['id_sanpham'],
            'ten_sanpham' => $item['ten_sanpham'],
            'gia_sanpham' => $item['gia_sanpham'],
            'giagoc_sanpham' => $item['giagoc_sanpham'],
            'anh_sanpham' => $item['anh_sanpham'],
            'mausac_sanpham' => [],
            'mausac_sanphamtext' => [],
            'images' => []
        ];
    }

    // Thêm màu sắc và ảnh vào các mảng
    $result[$id]['mausac_sanpham'][] = $item['mausac_sanphamhex'];
    $result[$id]['mausac_sanphamtext'][] = $item['mausac_sanphamtext'];
    $result[$id]['images'][] = $item['anh_sanpham'];
} ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 title">
            <div class="row">
                <div class="col-8 titleleft">
                    <div class="titlenameproduct">
                        <p><?= mb_strimwidth($detail[0]['ten_sanpham'], 0, 75, '...') ?></p>

                 
                    </div>
                </div>
                <div class="col-4 titleright">
                    <div class="row">
                        <div class="costproduct  col-6">
                            <div class="costtop col-12">
                                <p><?= number_format($detail[0]['gia_sanpham'], 0, ',', '.') ?> ₫</p>
                            </div>
                            <div class="costbot col-12">
                                <?php
                                if (isset($detail[0]['giagoc_sanpham'])) {
                                    echo "<p><del>" . number_format($detail[0]['giagoc_sanpham'], 0, ',', '.') . " ₫</del> Tiết kiệm đến " . number_format($detail[0]['giagoc_sanpham'] - $detail[0]['gia_sanpham'], 0, ',', '.') . " ₫</p>";
                                } else {
                                    echo "<p>Mừng mùa lễ hội siêu sale, chốt đơn ngay   </p>";
                                }
                                ?>

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


                                <?php
                                $image = explode(';', $detail[0]['anhslideshow_sanpham']);
                                foreach ($image as $index => $image_name) {
                                    $activeClass = ($index === 0) ? 'active' : '';
                                    echo " <div class='carousel-item $activeClass'><img style='object-fit: cover;' src='./image/" . $image_name . "' class='d-block w-100' alt='Product Image " . ($index + 1) . "'>  </div>";
                                }
                                ?>



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

                            <?php
                            $images = explode(';', $detail[0]['anhslideshow_sanpham']);
                            foreach ($images as $index => $image_name) {
                                echo "<img src='./image/" . $image_name . "' class='thumbnail img-thumbnail mx-1' alt='Thumbnail " . ($index + 1) . "' data-bs-target='#productCarousel' data-bs-slide-to='" . $index . "'>";
                            }
                            ?>

                        </div>

                    </div>

                </div>
                <div class="detailpro   col-6 p-0" id="scrollableDiv">
                    <div class="detailpro2 ">
                        <div class="row" style="height: 100%;width:80%;">
                            <div class=" col-12 ">
                                <div class="row">
                                    <div class="namepro col-12 p-0 ">
                                        <p><?= $detail[0]['ten_sanpham'] ?></p>
                                    </div>
                                    <div class="detail col-12 ">
                                        <p><?= $detail[0]['mota_sanpham'] ?></p>
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
                                            <p style="font-size: 25px;"> Chọn màu sắc </p>
                                            <p style="font-size: 15px;"> Màu Sắc : <span style="font-family: 'SamsungOne400', arial, sans-serif;">Đen bí ẩn</span></p>
                                            <form action="/submit-color" method="POST">
                                                <div class="d-flex flex-wrap my-3">
                                                    <?php
                                                     foreach ($result as $product) {
                                                    foreach ($product['mausac_sanpham'] as $index => $color) {
                                                        echo '<label class="color-option">
            <input type="radio" name="color" value="' . $color . '" required>
            <div class="colorbutton" style="background-color:' . $color . ';"></div>
          </label>';
                                                    }}
                                                    ?>

                                                </div>
                                                <div class="uudai col-12 p-0 ">
                                                    <p style="font-size: 25px;"> Ưu đãi </p>
                                                    <div class="uudai2 col-12 p-0 ">
                                                        <div class="row">
                                                            <div class="col-3 "><img src="./image/160x160-1-.png" alt=""></div>
                                                            <div class="col-9 ps-5">
                                                                <div class="row">
                                                                    <div class="fathersamsungcamketgia col-12"><button class="samsungcamketgia">Samsung Cam Kết Giá</button></div>
                                                                    <div class="col-12">
                                                                        <p style="  font-family: 'SamsungOne400', arial, sans-serif;font-size:15px;">Samsung nỗ lực tối ưu các ưu đãi cho khách hàng với chương trình Cam Kết Giá</p>
                                                                    </div>
                                                                    <div class="col-12"><a class="text-dark " href="#">Tìm hiểu thêm<i class="bi bi-arrow-up-right"></i></a></div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="areabuy col-12">
                                                    <div class="contentareabuy ">
                                                        <div class="row" style="width:100%;height:100%;margin:0;margin-top:20px;display:block">
                                                            <div class="textareabuy col-12 p-0 " style="border-bottom:1px solid gray;">
                                                                <p style="font-size: 23px;"><?= $detail[0]['ten_sanpham'] ?></p>
                                                            </div>
                                                            <div class=" col-12" style="text-align: center;height:15%;margin-top:20px;">
                                                                <p style="font-size:30px;"><?= number_format($detail[0]['gia_sanpham'], 0, ',', '.') ?> ₫</p>
                                                                <?php if (isset($detail[0]['giagoc_sanpham'])): ?>
                                                                    <p style="font-size:15px;transform: translateY(-20px);">
                                                                        <del style="font-family: 'SamsungOne400', arial, sans-serif;">
                                                                            <?= number_format($detail[0]['giagoc_sanpham'], 0, ',', '.') ?> ₫
                                                                        </del>
                                                                        <span style="color:blue">
                                                                            Tiết kiệm <?= number_format($detail[0]['giagoc_sanpham'] - $detail[0]['gia_sanpham'], 0, ',', '.') ?> ₫
                                                                        </span>
                                                                    </p>
                                                                <?php endif; ?>





                                                                <button type="submit" class="btnaddcart2 btn btn-primary">Thêm vào giỏ hàng</button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
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
</div>
<?php


require_once "./view/viewhome/footer.php" ?>
<script>
    const detailPro = document.querySelector('.detailpro');

    detailPro.addEventListener('wheel', (event) => {
        event.preventDefault();
        detailPro.scrollBy({
            top: event.deltaY * 0.3,
            behavior: 'smooth'
        });
    });
    const scrollableDiv = document.getElementById('scrollableDiv');

scrollableDiv.addEventListener('wheel', (event) => {
    const isAtBottom = scrollableDiv.scrollTop + scrollableDiv.clientHeight >= scrollableDiv.scrollHeight;
    const isAtTop = scrollableDiv.scrollTop === 0;

   
    if (isAtBottom && event.deltaY > 0) {
        event.preventDefault(); 
        window.scrollBy(0, event.deltaY); 
    }

    else if (isAtTop && event.deltaY < 0) {
        event.preventDefault();  
        window.scrollBy(0, event.deltaY);  
    }
});

</script>