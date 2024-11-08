<?php
require_once 'model/homeModel.php';
class homeController {
    public $homeModel;

    public function __construct() {
        $this->homeModel = new homeModel();
    }
    public function home() {
        $sanpham = $this->homeModel->top16Product();
        $danhmuc = $this->homeModel->danhmuc();
        require_once 'view/viewhome/home.php';
    }
    public function login() {
        require_once 'view/viewlogin/login.php';
    }
    public function signup() {
        require_once 'view/viewsignup/signup.php';
    }
    public function chitietsp() {
        $danhmuc = $this->homeModel->danhmuc();
        require_once 'view/viewchitietsanpham/chitietsanpham.php';
    }
}
?>