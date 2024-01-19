<?php

include_once "../models/db.php";

function load_all_sp(){
    $sql = "SELECT product.*, category.name FROM product INNER JOIN category ON product.idCategory=category.id";
    return getData($sql);
}
function load_one_sp($id){
    $sql = "SELECT * FROM product WHERE id = $id";
    return getData($sql, false);

}


