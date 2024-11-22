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
        background-color: unset;
        color: black !important;
        font-weight: bold !important;
    }

    .dropdown-toggle::after {
        display: none;
    }

    .dropdown-menu {
        border: none !important;
        border-radius: 20px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        padding: 20px;

    }

    .account {
        min-width: 250px;
        right: -20px;

    }

    .account a {
        font-size: 15px;
        line-height: 2;
    }

    .account hr {
        width: 90%;
        position: relative;
        left: 50%;
        transform: translate(-50%, 0);
    }

    .page-overlay {
        pointer-events: none;
        transition: all 0.3s ease;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
        z-index: 5;
    }
    .icon{
       font-size: 20px;
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
    <div class="page-overlay" ></div>
    <div class="container-fluid">
        <div class="row">
            <div class="header col-2 p-3 text-center bg-white">
                <a href="?act=/"> <img src="./image/logo.jpg" alt="Logo" class="img-fluid" style="max-height: 130%; width: auto;"></a>
            </div>
            <div class="header col-6 p-3 bg-white">
                <nav class="navbar navbar-expand-lg" style="background-color: white; font-size:13px;">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <?php foreach ($categories as $category) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                                            <?= htmlspecialchars($category['ten_danhmuc']) ?>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($category['sanpham'] as $product) { ?>
                                                <li><a class="dropdown-item" href="?act=chitietsp&id=<?= $product['id_sanpham'] ?> "><?= htmlspecialchars($product['ten_sanpham']) ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
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
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
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
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                                        Doanh Nghiệp
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a" href="#target-section" role="button" aria-expanded="false">
                                    <i class="icon fas fa-search"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                                    <i class="icon fa-solid fa-cart-shopping"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                                    <i class=" icon fa-solid fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu account">
                                    <li>
    <?php

    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
        if (isset($_SESSION['ten'])) {
          
            echo "<a class='dropdown-item' href='?act=db'> <i class=' icon fa-solid fa-user'></i> &nbsp; "  . $_SESSION['ten'] . "</a>";
        } else {
           
            echo "<a class='dropdown-item' href='?act=login'>Đăng kí/Đăng nhập</a>";
        }
    } else {
       
        echo "<a class='dropdown-item' href='?act=login'>Đăng kí/Đăng nhập</a>";
    }
    ?>
</li>

<li>
    <?php   

    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
            echo "<a class='dropdown-item' href='?act=logout'><i class='icon fa-solid fa-right-from-bracket'></i>&nbsp; Đăng xuất</a>";      
    } else {      
        echo "<a class='dropdown-item' href='?act=login'>Vì sao nên tạo Samsung account ?</a>";
    }
    ?>
</li>
                                    
                                        <hr>
                                        <li><a class="dropdown-item" href="#">Trang của tôi</a></li>
                                        <li><a class="dropdown-item" href="#">Đơn hàng</a></li>
                                        <li><a class="dropdown-item" href="#">Đăng kí sản phẩm</a></li>
                                        <li><a class="dropdown-item" href="#">Samsung Rewards</a></li>
                                        <li><a class="dropdown-item" href="#">Samsung Members</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- <div class="notibanner col bg-white-gray text-center text-black" style="font-size:13px;">
            Tích lũy thêm đến 5% điểm thưởng với tuần lễ samsung &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:#66B2FF; font-family: 'Roboto', sans-serif;">
                <u><a href="#">Tìm hiểu ngay</a></u>
            </span>
        </div> -->
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navItems = document.querySelectorAll('.nav-item');
        const overlay = document.querySelector('.page-overlay');

        navItems.forEach(navItem => {
            navItem.addEventListener('mouseenter', () => {
                overlay.style.opacity = '1';
            });

            navItem.addEventListener('mouseleave', () => {
                overlay.style.opacity = '0';
            });
        });
    });
    document.querySelectorAll('.dropdown-toggle').forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.preventDefault(); // Ngăn chặn sự kiện click mặc định
            e.stopPropagation(); // Ngăn chặn bubble của sự kiện click
        });
    });
</script>