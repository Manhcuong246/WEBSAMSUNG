<?php
require_once 'model/homeModel.php';
class homeController {
    public $homeModel;

    public function __construct() {
        $this->homeModel = new homeModel();
    }
    public function home() {
        require_once 'view/viewhome/home.php';
    }
}
?>