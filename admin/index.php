<?php
include 'header.php';

if (isset($_GET['url']) && $_GET['url'] != "") {
    $url = $_GET['url'];
    switch ($url) {
        case 'listDm':
            include 'category/listCategory.php';
            break;
        //end danh muc

        case 'listSp':
            include 'products/listProducts.php';
            break;
        //end san pham

        case 'listQtv':
            include 'taikhoan/listQtv.php';
            break;
        case 'listTv':
            include 'taikhoan/listTv.php';
            break;
        //end tai khoan
        
        default:
            include "trangchu/home.php";
            break;
    }
} else {
    include "trangchu/home.php";
}

include "footer.php";
?>