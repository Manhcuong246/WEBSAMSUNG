<style>
.header {
    height: 75px;
    position: relative;
    z-index: 6; 
}
.nav-link {
    font-size: 14.5px;
    color: black;
}
.nav-item:hover .dropdown-toggle:hover {
    background-color: black;
    color: #f4f4f4;
    border-radius: 40px;
}
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}
.notibanner {
    line-height: 45px;
}
.carousel-item {
    transition: transform 0.5s ease, opacity 0.5s ease !important;
}
.dropdown-item {
    font-size: 12px;
    font-family: 'SamsungOne400', arial, sans-serif;
}
.dropdown-item:hover {
    background-color: white;
    color: black !important;
    font-weight: bold !important;
}
.dropdown-toggle::after {
    display: none;
}
</style>

<header>
<?php 

$categories = [];  

foreach ($danhmuc as $row) {
    $ten_danhmuc = isset($row['ten_danhmuc']) ? $row['ten_danhmuc'] : 'Danh mục không tên';
    
    if (!isset($categories[$row['id_danhmuc']])) {
        $categories[$row['id_danhmuc']] = [
            'id_danhmuc' => $row['id_danhmuc'],
            'ten_danhmuc' => $ten_danhmuc,
            'sanpham' => []
        ];
    }

    $product_id = $row['id_sanpham'];
    if (!isset($categories[$row['id_danhmuc']]['sanpham'][$product_id])) {
        $categories[$row['id_danhmuc']]['sanpham'][$product_id] = [
            'id_sanpham' => $row['id_sanpham'],
            'ten_sanpham' => $row['ten_sanpham']
        ];
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="header col-2 p-3 text-center bg-white">
            <img src="./image/logo.jpg" alt="Logo" class="img-fluid" style="max-height: 130%; width: auto;">
        </div>
        <div class="header col-6 p-3 bg-white">
            <nav class="navbar navbar-expand-lg" style="background-color: white; font-size:13px;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <?php foreach ($categories as $category) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= htmlspecialchars($category['ten_danhmuc']) ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($category['sanpham'] as $product) { ?>
                                            <li><a class="dropdown-item" href="#"><?= htmlspecialchars($product['ten_sanpham']) ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                     
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SmartThings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="header col-4 p-3 bg-white">
            <nav class="navbar navbar-expand-lg" style="background-color: white; font-size:13px; float:right; margin-right:40px;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Hỗ trợ
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Thông tin Bảo Hành</a></li>
                                    <li><a class="dropdown-item" href="#">Bảng giá linh kiện</a></li>
                                    <li><a class="dropdown-item" href="#">Đặt hẹn lịch sửa chữa</a></li>
                                    <li><a class="dropdown-item" href="#">Tình trạng sửa chữa</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Doanh Nghiệp
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#target-section" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-search"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-cart"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="notibanner col bg-white-gray text-center text-black" style="font-size:13px;">
            Tích lũy thêm đến 5% điểm thưởng với tuần lễ samsung &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:#66B2FF; font-family: 'Roboto', sans-serif;">
                <u><a href="#">Tìm hiểu ngay</a></u>
            </span>
        </div>
    </div>
</div>
</header>
