<?php
require_once 'commons/function.php';
require_once 'controller/homeController.php';
require_once 'models/homeModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => (new homeController())->home(),
    'signup' => (new homeController())->signup(),
    'login' => (new homeController())->login(),
    'detail' => (new homeController())->detail($_GET['id']),
    '123123' => (new homeController())->thongbao(),
};
?>