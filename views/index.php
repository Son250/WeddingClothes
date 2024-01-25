<?php
include '../models/product.php';
include '../models/category.php';
include '_header.php';

$productTop = getProductTop();
$tenDm = getDm();

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'abc':

            break;
        case 'login':
            include 'login.php';
            break;
        case 'register':
            include 'register.php';
            break;

        case 'contact':
            include 'contact.php';
            break;

        case 'detailProduct':
            if (isset($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
            }
            $detailProduct = load_one_sp($idsp);
            include 'detailProduct.php';
            break;
        default:
            $productTop = getProductTop();
            include "trangchu/home.php";
            break;
    }
} else {
    $productTop = getProductTop();
    include "trangchu/home.php";
}

include "_footer.php";
