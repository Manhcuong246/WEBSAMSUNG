<style>
    .title {
        background-color: black;
        height: 85px;
        position: sticky;
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
        height: 85px;
        width: 60%;
        overflow: hidden;
        display: flex;
        justify-items: center;
        align-items: center;
        justify-content: center;
        padding-top: 23px;
    }

    .titlenameproduct p {
        color: white;
        font-size: 25px;
        font-family: 'Samsungsharp';
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


    .costtop {

        height: 42.5px;
        width: 100%;
        text-align: right;
        padding-top: 15px;

    }

    .costtop p {
        color: white;
        font-size: 25.5515px;

    }

    .costbot {
        height: 42.5px;
        width: 100%;
        text-align: right;
        line-height: 15px;
        padding-top: 10px;
    }

    .costbot p {

        color: rgb(33, 137, 255);
        font-size: 13.5px;


    }

    .costbot del {

        color: white;


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
        font-family: 'Samsungsharp';
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
        margin-bottom: 7px;

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

    :root {
        --color: #2089fe;
    }

    .btnaddcart2 {
        display: inline-block;
        padding: .75rem 1.25rem;
        border-radius: 10rem;
        color: #fff;
        width: 50%;
        font-size: 1rem;

        transition: all .3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .btnaddcart2:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--color);
        border-radius: 10rem;
        z-index: -2;
    }

    .btnaddcart2:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: #0cf;
        transition: all .3s;
        border-radius: 10rem;
        z-index: -1;
    }

    .btnaddcart2:hover {
        color: #fff;
    }

    .btnaddcart2:hover:before {
        width: 100%;
    }

    .btnaddcart {
        transform: scale(0.9);
        display: inline-block;
        padding: .75rem 1.25rem;
        border-radius: 10rem;
        color: #fff;
        width: 100%;
        font-size: 1rem;

        transition: all .3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .btnaddcart:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--color);
        border-radius: 10rem;
        z-index: -2;
    }

    .btnaddcart:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: #0cf;
        transition: all .3s;
        border-radius: 10rem;
        z-index: -1;
    }

    .btnaddcart:hover {
        color: #fff;
    }

    .btnaddcart:hover:before {
        width: 100%;
    }

    .uudai2 {
        transform: scale(0.95);
        margin-bottom: 8px;
        background-color: #f4f6fe;
        height: auto;
        width: 100%;
        border-radius: 10px;

    }

    .samsungcamketgia {
        padding: 0 15px;
        background-color: #006bea;
        width: auto;
        font-size: 14px;
        height: 55%;
        border-radius: 20px;
        color: white;
        border: none;

    }

    .fathersamsungcamketgia {

        height: 50px;
        display: flex;
        align-items: center;
    }

    .areabuy {
        margin-top: 75px;
        height: auto;
        width: 100%;
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;

    }

    .contentareabuy {

        padding-bottom: 5%;
        width: 80%;
        height: auto;

    }

    .textareabuy {

        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .areabtnaddcart2 {

        display: flex;
        justify-content: center;
    }

    .sticky {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    .hinhanhmau {
        width: 150px;
        height: 140px;

        margin-bottom: 15px;
        padding: 5px;
        border-radius: 5px;
        box-sizing: border-box;

    }

    .hinhanhmau img {
        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    .timhieuthem {
        color: black;
        position: relative;
        display: inline-block;
        text-decoration: none;
    }

    .timhieuthem::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background-color: gray;
        transition: width 0.3s ease, left 0.3s ease;
    }

    .timhieuthem:hover::after {
        width: 100%;
        left: 0;
    }

    .timhieuthem:hover {
        color: gray;
    }

    .showsanpham {
        border-bottom: 1px solid #dddddd;

        padding: 0;
        height: 160px;

    }

    .showsanpham img {
        transform: scale(0.85);
    }

    .titlegoiysanpham {
        margin-bottom: 5px;
        border: none;
        background-color: #01818c;
        color: white;
        font-size: 13px;
        border-radius: 40px;
        height: 23px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    }

    .buttongoiysanpham {
        padding: 9px;
        padding-left: 12px;
        padding-right: 12px;
        text-decoration: none;
        background-color: black;
        border-radius: 30px;
        color: white;
        height: 35px;
        width: 100px;
        border: none;
        transition: all 0.2s ease;

    }

    .buttongoiysanpham:hover {
        background-color: #555454;


    }

    .contentgoiysanpham {
        padding-top: 10px;

    }

    .goiysanpham {
        height: auto;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .radio-group {
        display: flex;
        gap: 10px;
    }

    .radio-group {
        flex-wrap: wrap;
        display: flex;
        gap: 10px;
    }

    .radio-option {
        min-width: 120px;
        padding: 20px 40px;
        border-radius: 10px;
        border: 1px solid #D3D3D3;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .radio-option.selected {
        background-color: #cce7ff;
        border-color: #007bff;
    }

    .radio-option:hover {
        border-color: #007bff;
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


    $result[$id]['mausac_sanpham'][] = $item['mausac_sanphamhex'];
    $result[$id]['mausac_sanphamtext'][] = $item['mausac_sanphamtext'];
    $result[$id]['images'][] = $item['anh_sanpham'];
} ?>
<div class="container-fluid titlefather">
    <div class="row ">
        <div class="col-12 title" id="title">
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
                        <div class="row" style="height: 100%;width:95%;">
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

                                            <div class="hinhanhmau">
                                                <img id="displayimg" src="./image/<?= $detail[0]['anh_sanpham'] ?>" alt="">
                                            </div>

                                            <p style="font-size: 15px;"> Màu Sắc : <span class="textcolor" id="colorName" style="font-family: 'SamsungOne400', arial, sans-serif;">Hãy chọn!</span>
                                            </p>
                                            <form action="/submit-color" method="POST">
                                                <div class="d-flex flex-wrap my-3">
                                                    <?php $colorNames = $result[$detail[0]['id_sanpham']]['mausac_sanphamtext'];
                                                    $imgcolor = $result[$detail[0]['id_sanpham']]['images'];
                                                    foreach ($result as $product) {
                                                        foreach ($product['mausac_sanpham'] as $index => $color) {
                                                            echo '<label class="color-option">
             <input type="radio" name="color" value="' . $color . '" data-color-name="' . $colorNames[$index] . '" data-color-img ="' . htmlspecialchars($imgcolor[$index], ENT_QUOTES, 'UTF-8') . '" required>
            <div class="colorbutton" style="background-color:' . $color . ';"></div>
          </label>';
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                                <?php if (isset($detail[0]['tieudebienthe_sanpham'])): ?>
    <div class="chonphanloai">
        <div class="row">
            <div class="col-12">
                <p style="font-size: 25px;">Chọn <?= $detail[0]['tieudebienthe_sanpham'] ?></p>
            </div>
            <div class="col-12">
                <div class="radio-group">
                    <?php
                    $luachon = explode(";", $detail[0]["cacluachonbienthe_sanpham"]);
                    foreach ($luachon as $index => $luachon) { ?>
                        <div class="radio-option" name="bienthe" value="<?= $luachon ?>" data-value="option<?= $index ?>" onclick="selectOption('option<?= $index ?>')"><?= $luachon ?></div>
                    <?php } ?>
                </div>
                <input type="hidden" name="selected_option" id="selected_option" />
            </div>
        </div>
    </div>
<?php endif; ?>

                                                <div class="goiysanpham">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p style="font-size: 25px;line-height: 0.4;"> Thêm sản phẩm khác </p>
                                                            <p style=" font-family: 'SamsungOne400', arial, sans-serif;font-size:15px;">Đừng bỏ lỡ các sản phẩm phù hợp với nhu cầu của bạn</p>
                                                        </div>
                                                        <?php foreach ($goiysanpham as $goiy) { ?>
                                                            <div class="showsanpham">
                                                                <div class="row">
                                                                    <div class="col-2"><a href="?act=chitietsp&id=<?= $goiy['id_sanpham'] ?>"><img src="./image/<?= $goiy['anhgoiy_sanpham'] ?>" style="width:100%" alt=""></a></div>
                                                                    <div class="contentgoiysanpham col-7 "><button class="titlegoiysanpham">Samsung Cam Kết Giá</button>
                                                                        <p><?= mb_strimwidth($goiy['ten_sanpham'], 0, 55, '...') ?></p>
                                                                        <p style=" font-family: 'SamsungOne400', arial, sans-serif;font-size:13px;"><?= mb_strimwidth($goiy['mota_sanpham'], 0, 200, '...') ?>
                                                                    </div>
                                                                    <div class="col-3 contentgoiysanpham">
                                                                        <p><?= number_format($goiy['gia_sanpham'], 0, ',', '.') ?> đ</p><a class="buttongoiysanpham" href="?act=chitietsp&id=<?= $goiy['id_sanpham'] ?>">Xem ngay</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="uudai col-12 p-0 ">
                                                    <p style="font-size: 25px;"> Ưu đãi </p>
                                                    <div class="uudai2 col-12 p-0 ">
                                                        <div class="row">
                                                            <div class="col-2 "><img src="./image/160x160-1-.png" style="width:140%" alt=""></div>
                                                            <div class="col-10 ps-5">
                                                                <div class="row">
                                                                    <div class="fathersamsungcamketgia col-12"><button class="samsungcamketgia">Samsung Cam Kết Giá</button></div>
                                                                    <div class="col-12">
                                                                        <p style="  font-family: 'SamsungOne400', arial, sans-serif;font-size:15px;">Samsung nỗ lực tối ưu các ưu đãi cho khách hàng qua chương trình Cam Kết Giá, giúp người dùng mua sản phẩm với giá tốt nhất.</p>
                                                                    </div>
                                                                    <div class="col-12"><a class="timhieuthem " href="#">Tìm hiểu thêm<i class="bi bi-arrow-up-right"></i></a></div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uudai2 col-12 p-0 ">
                                                        <div class="row">
                                                            <div class="col-2 "><img src="./image/offer_trade_in_blue.png" style="width:130%" alt=""></div>
                                                            <div class="col-10 ps-5">
                                                                <div class="row" style="height:100%">
                                                                    <div class="fathersamsungcamketgia col-12"><button class="samsungcamketgia">Thu cũ đổi mới tại nhà</button></div>
                                                                    <div class="col-12">
                                                                        <p style="  font-family: 'SamsungOne400', arial, sans-serif;font-size:15px;">Lên đời TV Samsung 2024, giảm trừ trực tiếp đến <span style="color:#0099ff;font-weight: 900;">15%</span> giá niêm yết</p>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uudai2 col-12 p-0 ">
                                                        <div class="row">
                                                            <div class="col-2 " style="padding:0;padding:15px;  "><img src="./image/Warranty.avif" style="width:120%;margin-left:10px;" alt=""></div>
                                                            <div class="col-10 ps-5">
                                                                <div class="row" style="height:100%">
                                                                    <div class="fathersamsungcamketgia col-12"><button class="samsungcamketgia">Bảo hành 20 năm động cơ Digital Inverter.</button></div>
                                                                    <div class="col-12">
                                                                        <p style="  font-family: 'SamsungOne400', arial, sans-serif;font-size:15px;">Độ bền vượt trội giúp tiết kiệm chi phí và giảm thiểu rác thải điện tử, bảo vệ môi trường.</p>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uudai2 col-12 p-0 ">
                                                        <div class="row">
                                                            <div class="col-2 "><img src="./image/samsung_rewards_tier.webp" style="width:140%" alt=""></div>
                                                            <div class="col-10 ps-5">
                                                                <div class="row">
                                                                    <div class="fathersamsungcamketgia col-12"><button class="samsungcamketgia">Tích điểm thưởng</button></div>
                                                                    <div class="col-12">
                                                                        <p style="  font-family: 'SamsungOne400', arial, sans-serif;font-size:15px;">Đăng nhập ngay để nhận điểm Samsung Rewards với đơn hàng này
                                                                            Blue : 5% | Gold : 7% | Platinum : 9%
                                                                            Ưu đãi x2 Đổi điểm Rewards, tối đa 1 triệu.</p>
                                                                    </div>
                                                                    <div class="col-12"><a class="timhieuthem " href="#">Tìm hiểu thêm<i class="bi bi-arrow-up-right"></i></a></div>
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
                                                                <?php if (isset($detail[0]['giagoc_sanpham'])) { ?>
                                                                    <p style="font-size:15px;transform: translateY(-20px);">
                                                                        <del style="font-family: 'SamsungOne400', arial, sans-serif;">
                                                                            <?= number_format($detail[0]['giagoc_sanpham'], 0, ',', '.') ?> ₫
                                                                        </del>
                                                                        <span style="color:blue">
                                                                            Tiết kiệm <?= number_format($detail[0]['giagoc_sanpham'] - $detail[0]['gia_sanpham'], 0, ',', '.') ?> ₫
                                                                        </span>
                                                                    </p>
                                                                <?php } else {  ?>
                                                                    <p style="font-size:15px;transform: translateY(-20px);"> <span style="color:blue">
                                                                            Mừng mùa lễ hội siêu sale, chốt đơn ngay
                                                                        </span> </p>
                                                                <?php }  ?>



                                                                <button type="submit" class="btnaddcart2 btn ">Thêm vào giỏ hàng</button>
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
require_once "./view/viewchitietsanpham/comment.php";
require_once "./view/viewhome/footer.php" ?>
<script>
    document.querySelectorAll('input[name="color"]').forEach(input => {
        input.addEventListener('change', function() {
            const colorName = this.getAttribute('data-color-name');
            const colorImg = this.getAttribute('data-color-img');
            document.getElementById('colorName').textContent = colorName;
            const fullImagePath = `./image/${colorImg}`;

            console.log(colorImg);

            document.getElementById('displayimg').src = fullImagePath;

        });
    });
    const detailPro = document.querySelector('.detailpro');

    detailPro.addEventListener('wheel', (event) => {
        event.preventDefault();
        detailPro.scrollBy({
            top: event.deltaY * 0.8,
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
        } else if (isAtTop && event.deltaY < 0) {
            event.preventDefault();
            window.scrollBy(0, event.deltaY);
        }
    });
    const header = document.getElementById("title");
    const titleFather = document.querySelector(".titlefather");

    const sticky = header.offsetTop;

    window.onscroll = function() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            titleFather.style.paddingTop = "85px";
        } else {
            header.classList.remove("sticky");
            titleFather.style.paddingTop = "";
        }
    };

    function selectOption(option) {
        // Deselect all options
        const options = document.querySelectorAll('.radio-option');
        options.forEach(opt => opt.classList.remove('selected'));

        // Mark selected option
        const selectedOption = document.querySelector(`.radio-option[data-value="${option}"]`);
        selectedOption.classList.add('selected');

        // Update hidden input value
        document.getElementById('selected_option').value = option;
    }
</script>