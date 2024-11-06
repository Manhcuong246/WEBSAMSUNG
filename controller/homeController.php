<?php
require_once 'model/homeModel.php';
class homeController {
    public $homeModel;

    public function __construct() {
        $this->homeModel = new homeModel();
    }
    public function home() {
        $sanpham = $this->homeModel->top16Product();
        require_once 'view/viewhome/home.php';
    }
}
?>