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
    public function chitietsp($id) {
        $danhmuc = $this->homeModel->danhmuc();
        $detail = $this->homeModel->findId($id);
        $goiysanpham = $this->homeModel->goiysanpham($id);
        require_once 'view/viewchitietsanpham/chitietsanpham.php';
    }
  
}
?>