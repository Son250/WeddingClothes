<?php 
function getCategory(){
    $sql = "SELECT * FROM category";
    return getData($sql);
}