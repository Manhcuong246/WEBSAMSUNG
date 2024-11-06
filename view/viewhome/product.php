<style>
    .product {
        height: auto;
        width: 80%;
    }
    .productitem {
        height: 620px;
        border: 1px solid gray;
   
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
</style><?php
// Giả sử $sanpham là kết quả từ truy vấn SQL kết hợp hai bảng
$products = [];

foreach ($sanpham as $row) {
    if (!isset($products[$row['id_sanpham']])) {
        $products[$row['id_sanpham']] = [
            'id_sanpham' => $row['id_sanpham'],
            'ten_sanpham' => $row['ten_sanpham'],
            'gia_sanpham' => $row['gia_sanpham'],
            'giagoc_sanpham' => $row['giagoc_sanpham'],
            'anh_sanpham' => $row['anh_sanpham'],
            'mausac_sanpham' => [],
            'mausac_sanphamtext' => [], 
            'images' => []  
        ];
    }

    
    $products[$row['id_sanpham']]['mausac_sanpham'][] = $row['mausac_sanphamhex'];
    $products[$row['id_sanpham']]['mausac_sanphamtext'][] = $row['mausac_sanphamtext'];  
    $products[$row['id_sanpham']]['images'][] = $row['anh_sanpham']; 
}
?>

<!-- HTML phần hiển thị -->
<div class="container-fluid" style="text-align: center;">
    <br><br><br>
    <h2 style="font-size: 50px;">Khám phá các sản phẩm nổi bật & ưu đãi hấp dẫn</h2>
</div>
<br><br>
<div class="product container">
    <div class="row" style="height: 100%;">
        <?php foreach ($products as $key => $product) { ?>
        <div class="col-3 py-1">
            <div class="productitem">
                <div id="carouselExampleIndicators<?= $key ?>" class="carousel slide">
                    <!-- Các nút chuyển màu -->
                    <div class="buttoncolorproduct carousel-indicators">
                        <?php
                        foreach ($product['mausac_sanpham'] as $index => $color) {
                            $activeClass = $index == 0 ? 'active' : '';
                            echo '<button id="mybutton'. $index .'" style="background-color: ' . $color . ' !important" type="button" data-bs-target="#carouselExampleIndicators' . $key . '" data-bs-slide-to="' . $index . '" class="' . $activeClass . '" aria-current="true" aria-label="Slide ' . ($index + 1) . '"></button>';
                        }
                        ?>
                    </div>

                    <!-- Các hình ảnh sản phẩm -->
                    <div class="carousel-inner">
                        <?php
                        foreach ($product['images'] as $index => $image) {
                            $activeClass = $index == 0 ? 'active' : '';
                            echo '
                                <div class="carousel-item ' . $activeClass . '">
                                    <div class="imgitem">
                                        <img src="./image/' . $image . '" alt="" style="object-position: center !important;">
                                    </div>
                                </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="nameitem">
                    <p><?= $product['ten_sanpham'] ?></p>
                </div>
                <div class="coloritem">
                    <p>Màu sắc: 
                        <span class="myText" >
                        <?= implode(", ", $product['mausac_sanphamtext']); ?>  
                        </span>
                    </p>
                </div>
                <div class="costitem">
    <p><?= number_format($product['gia_sanpham'], 0, ',', '.') ?> VND</p>
    <?php if (isset($product['giagoc_sanpham']) && !empty($product['giagoc_sanpham'])): ?>
        <del><?= number_format($product['giagoc_sanpham'], 0, ',', '.') ?> VND</del>
    <?php endif; ?>
</div>

                <div class="buttonitem">
                    <button>Mua ngay</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


