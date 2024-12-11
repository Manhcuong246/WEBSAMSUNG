<style>
    .avatar{
        width: 40px;
        height: 40px;
        border-radius: 100px;
        overflow: hidden;
        
    }
    .avatar img{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
    .avatarcha{
      
        display: flex;
        align-items: center;
        justify-content: center;
        justify-items: center;

    }
    .rank {

height: 240px;
width: 240px;
position: absolute;
text-align: center;
right: 0;
transform: translate(-100px, -55px);
}

.rank img {
height: 95%;
width: 95%;
}

.rank p {
color: white;
font-size: 20px;
transform: translate(0, -20px);
}
</style>

<nav class="navbar navbar-expand-xl">
            <div class="container h-100 ">
                <a class="navbar-brand" href="?act=/">
                    <h1 class="tm-site-title mb-0">SAMSUNG</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                    <?php

if ($_SESSION['vaitro'] == 'admin') {
?>
    <li class="nav-item">
        <a class="nav-link <?php if($_GET['act']=="admin") echo "active"; ?>" href="?act=admin">
            <i class="fas fa-tachometer-alt"></i>
            Bảng điều khiển
            <span class="sr-only">(current)</span>
        </a>
    </li>
<?php
}
?>
<!-- 
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Báo cáo <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li> -->
                        <?php

if ($_SESSION['vaitro'] == 'admin' || $_SESSION['vaitro'] == 'nhanvien') {
?>
    <li class="nav-item">
        <a class="nav-link <?php if($_GET['act']=="productadmin" || $_GET['act']=="addproduct" || $_GET['act']=="themdanhmuc" || $_GET['act']=="editsp"|| $_GET['act']=="suamausp"|| $_GET['act']=="themmau") echo "active"; ?>" href="?act=productadmin">
            <i class="fas fa-box"></i>
            Sản phẩm
        </a>
    </li>
<?php
}
?>

                        <?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'khachhang') {
    $isActive = (isset($_GET['act']) && $_GET['act'] == 'giohang') ? 'active' : '';
    echo '<li class="nav-item">
            <a class="nav-link ' . htmlspecialchars($isActive) . '" href="?act=giohang">
                <i class="fas fa-shopping-cart"></i>
                Giỏ hàng
            </a>
          </li>';
}
?>
 <?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'nhanvien'|$_SESSION['vaitro'] == 'admin') {
    $isActive = (isset($_GET['act']) && $_GET['act'] == 'dangchoxacnhanadmin') ? 'active' : '';
    echo '<li class="nav-item">
            <a class="nav-link ' . htmlspecialchars($isActive) . '" href="?act=dangchoxacnhanadmin">
               <i class="fas fa-hourglass-half"></i>

               Đang chờ xác nhận
            </a>
          </li>';
}
?>
      <?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'nhanvien'|$_SESSION['vaitro'] == 'admin') {
    $isActive = (isset($_GET['act']) && $_GET['act'] == 'dangxulinhanvien') ? 'active' : '';
    echo '<li class="nav-item">
            <a class="nav-link ' . htmlspecialchars($isActive) . '" href="?act=dangxulinhanvien">
                <i class="fas fa-shipping-fast"></i>
                Đơn hàng đang giao
            </a>
          </li>';
}
?>
 
 <?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'khachhang') {
    // Kiểm tra trạng thái "active"
    $act = isset($_GET['act']) ? $_GET['act'] : '';
    $isActive = ($act == 'dangxuli') ? 'active' : '';
    echo '<li class="nav-item">
            <a class="nav-link ' . $isActive . '" href="?act=dangxuli">
                <i class="fas fa-shipping-fast"></i>
                Đang xử lí
            </a>
          </li>';
}
?>

      <?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'khachhang') {
    $isActive = (isset($_GET['act']) && $_GET['act'] == 'spdamua') ? 'active' : '';
    echo '<li class="nav-item">
            <a class="nav-link ' . htmlspecialchars($isActive) . '" href="?act=spdamua">
              <i class="fas fa-cart-arrow-down"></i>
               Sản phẩm đã mua

            </a>
          </li>';
}
?>
      <?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'khachhang') {
    $isActive = (isset($_GET['act']) && $_GET['act'] == 'spdahuy') ? 'active' : '';
    echo '<li class="nav-item">
            <a class="nav-link ' . htmlspecialchars($isActive) . '" href="?act=spdahuy">
          <i class="fas fa-times-circle"></i>

               Sản phẩm đã hủy

            </a>
          </li>';
}
?>
<?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] === 'admin') {
  ?> 
    <li class="nav-item">
        <a class="nav-link <?php if($_GET["act"]=="quanlitaikhoan"||$_GET["act"]=="thongtinnhanvien" ) echo "active"; ?>" href="?act=quanlitaikhoan">
            <i class="fas fa-user-tie"></i>
            Quản lí tài khoản
        </a>
    </li>
<?php  } ?>

<?php
if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] === 'nhanvien') {
  ?>
    <li class="nav-item">
        <a class="nav-link <?php if($_GET["act"]=="quanlitaikhoan") echo "active"; ?>" href="?act=quanlitaikhoan">
            <i class="fas fa-users"></i>
            Tài khoản khách hàng
        </a>
    </li>
<?php  } ?>

                        <li class="nav-item">
                            <a class="nav-link  <?php if($_GET['act']=="profileadmin") echo "active"; ?>" href="?act=profileadmin&id=<?= $_SESSION['id'] ?>">
                                <i class="fas fa-id-card"></i>
                                Hồ Sơ
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                          <div class="avatarcha">  <div class="avatar"><img src="./image/<?= $_SESSION['anh'] ?>" alt=""></div></div>
                            <a class="nav-link d-block" style="font-size: 15px;margin:5px;padding:0;" href="?act=logout">
                                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                                    echo $_SESSION['ten'];
                                } ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>