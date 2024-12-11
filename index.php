<?php
session_start();ob_start();

require_once 'commons/function.php';
require_once 'controller/homeController.php';
require_once 'controller/AdminController.php';
require_once 'model/homeModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => (new homeController())->home(),
    'login' => (new homeController())->login(),
    'signup' => (new homeController())->signup(),
     'chitietsp' => (new homeController())->chitietsp($_GET['id']),
     'logout' => (new homeController())->logout(),
     'admin' => (new AdminController())->admin(),
     'productadmin' => (new AdminController())->productadmin(),
     'profileadmin' => (new AdminController())->profileadmin($_GET['id']),
     'addproduct' => (new AdminController())->addproduct(),
     'editsp' => (new AdminController())->editsp($_GET['id']),
     'xoasp' => (new AdminController())->xoasp($_GET['id']),
     'giaithichuudai' => (new AdminController())->giaithichuudai(),
     'giohang' => (new AdminController())->giohang($_SESSION['id']),
     'xoagiohang' => (new AdminController())->xoagiohang($_GET['id']),
     'xoabinhluan' => (new AdminController())->xoabinhluan($_GET['id'],$_GET['idsp']),
     'themdanhmuc' => (new AdminController())->themdanhmuc(),
     'suamausp' => (new AdminController())->editcolor($_GET['id']),
     'themmau' => (new AdminController())->themmau($_GET['id']),
     'xoamausp' => (new AdminController())->xoamau($_GET['id'],$_GET['idsp']),
     'quanlitaikhoan' => (new AdminController())->quanlitaikhoan(),
     'thongtinnhanvien' => (new AdminController())->thongtinnhanvien($_GET['id']),
     'thongtinkhachhang' => (new AdminController())->thongtinkhachhang($_GET['id']),
     'thanhtoan' => (new AdminController())->thanhtoan($_GET['id'],$_SESSION['diachi']),
     'dangxuli' => (new AdminController())->dangxuli($_SESSION['id']),
     'xoadonhang' => (new AdminController())->xoadonhang($_GET['id']),
     'spdahuy' => (new AdminController())->dahuy($_SESSION['id']),
     'dangxulinhanvien' => (new AdminController())->dangxulinhanvien($_SESSION['id']),
     'giaothanhcong' => (new AdminController())->giaothanhcong($_GET['id']),
     'spdamua' => (new AdminController())->damua($_SESSION['id']),
     'dangchoxacnhanadmin' => (new AdminController())->dangchoxacnhanadmin(),
     'chitietdonhang' => (new AdminController())->chitietdonhang($_GET['id']),
     'xacnhangiaohang' => (new AdminController())->xacnhangiaohang($_GET['id'])
};
?>