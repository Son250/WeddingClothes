<?php

include_once "../models/db.php";

// function load_all_sp()
// {
//     $sql = "SELECT product.*, category.name FROM product INNER JOIN category ON product.idCategory=category.id";
//     return getData($sql);
// }
function load_all_product($kyw)
{
    $sql = "SELECT product.*, category.name FROM product INNER JOIN category ON product.idCategory=category.id WHERE 1";
    if ($kyw != "") {
        $sql .= " AND productName like '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY id desc";
    return getData($sql);
}
function load_one_sp($id)
{
    $sql = "SELECT * FROM product WHERE id = $id";
    return getData($sql, false);
}

function addProduct($nameSP, $photo, $priceSP, $quantitySP, $descriptionSP, $danhmuc)
{
    $sql = "INSERT INTO `product`(`productName`, `image`, `description`, `price`, `quantity`,`idCategory`) VALUES ('$nameSP','$photo','$descriptionSP','$priceSP','$quantitySP','$danhmuc')";
    return getData($sql);
}

function listCategory()
{
    $sql = "SELECT * FROM `category`";
    return getData($sql . false);
}
function update_sp($id, $danhmuc, $nameSP, $photo, $descriptionSP, $priceSP, $quantitySP, $option)
{
    if ($photo != "") {
        $sql = "UPDATE `product` SET idCategory='$danhmuc', productName='$nameSP', image='$photo', description='$descriptionSP', price='$priceSP', quantity='$quantitySP', option='$option' WHERE id='$id'";
    } else {
        $sql = "UPDATE `product` SET idCategory='$danhmuc', productName='$nameSP', description='$descriptionSP', price='$priceSP', quantity='$quantitySP', option='$option' WHERE id='$id'";
    }

    return getData($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM product WHERE id = '$id'";
    return getData($sql);
}
function getProductTop()
{
    $sql = "SELECT * FROM product order by view desc limit 5";

    return getData($sql);
}
function getDm()
{
    $sql = "SELECT * FROM category";

    return getData($sql);
}

function getProductDm($iddm)
{
    $sql = "SELECT * FROM product WHERE idCategory = $iddm LIMIT 0,4";
    return getData($sql);
}
