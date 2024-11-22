<?php
session_start();ob_start();

require_once 'commons/function.php';
require_once 'controller/homeController.php';
require_once 'model/homeModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => (new homeController())->home(),
    'login' => (new homeController())->login(),
    'signup' => (new homeController())->signup(),
     'chitietsp' => (new homeController())->chitietsp($_GET['id']),
     'logout' => (new homeController())->logout(),
     'db' => (new homeController())->db(),
     'table' => (new homeController())->table(),
};
?>