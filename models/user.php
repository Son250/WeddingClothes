<?php

function load_all_user($idRole,$kyw){
    $query="SELECT * FROM user WHERE 1";
    if($kyw!=""){
        $query.=" AND userName like '%".$kyw."%'";
    }
    if($idRole==1){
        $query.=" AND ( idRole=1 OR idRole=2 )";
    }else{
        $query.=" AND idRole=3";
    }
    $query.=" ORDER BY id desc";
    return getData($query);
}
function load_one_tk($id){
    $query="SELECT * FROM user WHERE id='$id'";
    return getData($query,false);
}
function insert_tk($fullName,$userName,$password,$phoneNumber,$address,$idRole){
    $query="INSERT INTO `user`(`fullName`, `userName`, `password`, `phoneNumber`, `address`, `idRole`) 
    VALUES ('$fullName','$userName','$password','$phoneNumber','$address','$idRole')";
    return getData($query);
}
function update_tk($id,$fullName,$userName,$password,$phoneNumber,$address,$option,$idRole){
    $query="UPDATE `user` SET `fullName`='$fullName',`userName`='$userName',`password`='$password',`phoneNumber`='$phoneNumber',
    `address`='$address',`option`='$option',`idRole`='$idRole' WHERE `id`='$id'";
    return getData($query,false);
}
?>