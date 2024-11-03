<?php
require_once 'commons/function.php';
require_once 'controller/homeController.php';
require_once 'model/homeModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => (new homeController())->home(),
   
};
?>