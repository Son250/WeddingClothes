<?php
include '_header.php';

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
       
                
        case 'detailProduct':
            include 'detailProduct.php';
            break;
        default:
            include "trangchu/home.php";
            break;
    }
} else {
    include "trangchu/home.php";
}

include "_footer.php";
