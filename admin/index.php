<?php
include 'header.php';
include '../models/db.php';
include '../models/product.php';

if (isset($_GET['url']) && $_GET['url'] != "") {
    $url = $_GET['url'];
    switch ($url) {
        case 'listDm':
            include 'category/listCategory.php';
            break;
        //end danh muc

        case 'listSp':
            $listsp = load_all_sp();
            include 'products/listProducts.php';
            break;
        case 'addSp':
            if (isset($_POST['submit'])){
                $productName = $_POST['productName'];
                $image = $_POST['image'][''];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                insert_sp($productName, $image , $description, $price, $quantity);
                header("Location: index.php");
            }            
            include 'products/addSp.php';
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