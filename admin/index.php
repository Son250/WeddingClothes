<?php
include '../models/db.php';
include '../models/user.php';
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
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listTk=load_all_user(1,$kyw);
            include 'taikhoan/listQtv.php';
            break;
        case 'listTv':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listTk=load_all_user(2,$kyw);
            include 'taikhoan/listTv.php';
            break;
        //end tai khoan
        case 'addTk':
            if(isset($_POST['submit'])){
                $fullName=$_POST['fullName'];
                $userName=$_POST['userName'];
                $password=$_POST['password'];
                $phoneNumber=$_POST['phoneNumber'];
                $address=$_POST['address'];
                $idRole=$_POST['idRole'];
                if(!empty($userName)||!empty($password)){
                    insert_tk($fullName,$userName,$password,$phoneNumber,$address,$idRole);
                    if($idRole==1||$idRole==2){
                        echo '<script>
                                alert("Bạn đã thêm tài khoản thành công !");
                                window.location.href="?url=listQtv";
                            </script>';
                    }else{
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
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
            }
            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $fullName=$_POST['fullName'];
                $userName=$_POST['userName'];
                $password=$_POST['password'];
                $phoneNumber=$_POST['phoneNumber'];
                $address=$_POST['address'];
                $idRole=$_POST['idRole'];
                if(!empty($userName)||!empty($password)){
                    update_tk($id,$fullName,$userName,$password,$phoneNumber,$address,0,$idRole);
                    if($idRole==1||$idRole==2){
                        echo '<script>
                                alert("Bạn đã sửa tài khoản thành công !");
                                window.location.href="?url=listQtv";
                            </script>';
                    }else{
                        echo '<script>
                                alert("Bạn đã sửa tài khoản thành công !");
                                window.location.href="?url=listTv";
                            </script>';
                    }
                }     
            }
            include 'taikhoan/update.php';
            break;
        case 'deleteTk':
            break;
        default:
            include "trangchu/home.php";
            break;
    }
} else {
    include "trangchu/home.php";
}

include "footer.php";
?>