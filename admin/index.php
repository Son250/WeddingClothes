<?php
session_start();
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
            $listTk=load_all_user(1,$kyw,0);
            include 'taikhoan/listQtv.php';
            break;
        case 'listTv':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listTk=load_all_user(2,$kyw,0);
            include 'taikhoan/listTv.php';
            break;
        case 'listTkKhoa':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listTk=load_all_user(2,$kyw,1);
            include 'taikhoan/listTkKhoa.php';
            break;
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
        case 'khoaTk':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
                if($tk){
                    $result=update_option_tk($tk['id'],1);
                    if($tk['idRole']==3){
                        if(!$result){
                            echo '<script>
                                    alert("Bạn đã khóa tài khoản thành công !");
                                    window.location.href="?url=listTv";
                                </script>';
                        }
                    }else{
                        if(!$result){
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
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
                if($tk){
                    $result=update_option_tk($tk['id'],0);
                    if(!$result){
                        echo '<script>
                                alert("Bạn đã mở khóa tài khoản thành công !");
                                window.location.href="?url=listTkKhoa";
                            </script>';
                    }
                    
                }
            }
            break;
        case 'xoaTk':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
                if($tk){
                    $result=delete_tk($tk['id']);
                    if(!$result){
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
?>