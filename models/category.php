<?php 
function getCategory(){
    $sql = "SELECT * FROM category";
    return getData($sql);
}

function load_all_category($kyw){
    $query="SELECT * FROM category WHERE 1";
    if($kyw!=''){
        $query .=" AND name like '%".$kyw."%'";
    }
        $query .=" ORDER BY id desc";
    return getData($query);
}
function load_one_category($id){
    $query="SELECT * FROM category WHERE id=".$id;
    return getData($query,false);
}
function insert_category($name, $description, $option){
    $query = "INSERT INTO `category`(`name`, `description`, `option`) VALUES ('$name','$description','$option')";
    return getData($query);
}
function update_category($id,$name){
    $query="UPDATE `category` SET `name`='$name' WHERE id=".$id;
    return getData($query,false);
}
function delete_category($id){
    $query="DELETE FROM category WHERE id=".$id;
    return getData($query,false);
}