<?php
session_start();
include '../models/db.php';
include '../models/user.php';
include '../models/product.php';
include '../models/category.php';
include 'header.php';



if (isset($_GET['url']) && $_GET['url'] != "") {
    $url = $_GET['url'];
    switch ($url) {
        case 'listCategory':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $listcategory = load_all_category($kyw);
            include "category/listCategory.php";
            break;
        case 'addCategory':
            $nameErr = "";
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                if (empty(trim($name))) {
                    $nameErr = "Vui lòng nhập tên danh mục !";
                } else {
                    insert_category($name, $description, 0);
                    echo '<script>
                            alert("Bạn đã thêm thành công !");
                            window.location.href="index.php?url=listCategory";
                        </script>';
                }
            }
            include "category/add.php";
            break;
        case 'updateCategory':
            $nameErr = "";
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $category = load_one_category($id);
                if ($category) {
                    $id = $category['id'];
                    $name = $category['name'];
                }
            }
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                if (empty(trim($name))) {
                    $nameErr = "Vui lòng nhập tên danh mục !";
                } else {
                    update_category($id, $name);
                    echo '<script>
                            alert("Bạn đã sửa danh mục thành công !");
                            window.location.href="index.php?url=listCategory";
                        </script>';
                }
            }
            include "category/update.php";
            break;
        case 'deleteCategory':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $result = delete_category($id);
                if (!$result) {
                    echo '<script>
                                alert("Bạn đã xóa thành công !");
                                window.location.href="index.php?url=listCategory";
                            </script>';
                }
            }

            include "category/listCategory.php";
            break;
            //end danh muc
        case 'listSp':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listsp = load_all_product($kyw);
            include 'products/listProducts.php';
            break;
        case 'addSp':
            $idCate = getCategory();
            if (isset($_POST['btn-addProduct'])) {
                $nameSP = $_POST['productName'];
                $photo = "";
                if (isset($_FILES['image']) && $_FILES['image']['name'] != "") {
                    $photo = time() . "_" . $_FILES['image']['name'];
                    $uploadsDir = "../assets/uploads/";
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadsDir . $photo);
                }
                $priceSP = $_POST['price'];
                $quantitySP = $_POST['quantity'];
                $descriptionSP = $_POST['description'];
                $danhmuc = $_POST['idCategory'];
                addProduct($nameSP, $photo, $priceSP, $quantitySP, $descriptionSP, $danhmuc);
                echo '<script> window.location.href = "index.php?url=listSp";</script>';
            }
            include 'products/addProduct.php';
            break;
        case 'listQtv':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listTk = load_all_user(1, $kyw, 0);
            include 'taikhoan/listQtv.php';
            break;
        case 'listTv':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listTk = load_all_user(2, $kyw, 0);
            include 'taikhoan/listTv.php';
            break;
        case 'listTkKhoa':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listTk = load_all_user(2, $kyw, 1);
            include 'taikhoan/listTkKhoa.php';
            break;
        case 'addTk':
            if (isset($_POST['submit'])) {
                $fullName = $_POST['fullName'];
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $phoneNumber = $_POST['phoneNumber'];
                $address = $_POST['address'];
                $idRole = $_POST['idRole'];
                if (!empty($userName) || !empty($password)) {
                    insert_tk($fullName, $userName, $password, $phoneNumber, $address, $idRole);
                    if ($idRole == 1 || $idRole == 2) {
                        echo '<script>
                                alert("Bạn đã thêm tài khoản thành công !");
                                window.location.href="?url=listQtv";
                            </script>';
                    } else {
                        echo '<script>
                                alert("Bạn đã thêm tài khoản thành công !");
                                window.location.href="?url=listTv";
                            </script>';
                    }
                }
            }
            include 'taikhoan/add.php';
            break;
        case 'updateTk':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $tk = load_one_tk($id);
            }
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $fullName = $_POST['fullName'];
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $phoneNumber = $_POST['phoneNumber'];
                $address = $_POST['address'];
                $idRole = $_POST['idRole'];
                if (!empty($userName) || !empty($password)) {
                    update_tk($id, $fullName, $userName, $password, $phoneNumber, $address, 0, $idRole);
                    if ($idRole == 1 || $idRole == 2) {
                        echo '<script>
                                alert("Bạn đã sửa tài khoản thành công !");
                                window.location.href="?url=listQtv";
                            </script>';
                    } else {
                        echo '<script>
                                alert("Bạn đã sửa tài khoản thành công !");
                                window.location.href="?url=listTv";
                            </script>';
                    }
                }
            }
            include 'taikhoan/update.php';
            break;
        case 'khoaTk':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $tk = load_one_tk($id);
                if ($tk) {
                    $result = update_option_tk($tk['id'], 1);
                    if ($tk['idRole'] == 3) {
                        if (!$result) {
                            echo '<script>
                                    alert("Bạn đã khóa tài khoản thành công !");
                                    window.location.href="?url=listTv";
                                </script>';
                        }
                    } else {
                        if (!$result) {
                            echo '<script>
                                    alert("Bạn đã khóa tài khoản thành công !");
                                    window.location.href="?url=listQtv";
                                </script>';
                        }
                    }
                }
            }
            break;
        case 'moKhoaTk':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $tk = load_one_tk($id);
                if ($tk) {
                    $result = update_option_tk($tk['id'], 0);
                    if (!$result) {
                        echo '<script>
                                alert("Bạn đã mở khóa tài khoản thành công !");
                                window.location.href="?url=listTkKhoa";
                            </script>';
                    }
                }
            }
            break;
        case 'xoaTk':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $tk = load_one_tk($id);
                if ($tk) {
                    $result = delete_tk($tk['id']);
                    if (!$result) {
                        echo '<script>
                                alert("Bạn đã xóa tài khoản thành công !");
                                window.location.href="?url=listTkKhoa";
                            </script>';
                    }
                }
            }
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
