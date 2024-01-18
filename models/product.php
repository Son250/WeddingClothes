<?php
include_once "../models/db.php";

function load_all_sp(){
    $sql = "SELECT product.*, category.name FROM product INNER JOIN category ON product.idCategory=category.id WHERE 1";
    return getData($sql);
}
function load_one_sp($id){
    $sql = "SELECT * FROM product WHERE id = $id";
    return getData($sql);
}
function insert_sp($danhmuc, $productName, $image , $description, $price, $quantity){
    $sql = "INSERT INTO product(idCategory, productName, image, description, price, quantity, option) 
            VALUES ('$danhmuc', '$productName, '$image' , '$description', '$price', '$quantity')";
    return getData($sql);
}
